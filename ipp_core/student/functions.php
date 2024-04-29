<?php
/** 
 * autor: Jan Lindovsky
 */ 
namespace IPP\Student;

use DOMNodeList;
use DOMElement;


trait Functions
{
    // return variable from frame
    private function isVar(arg $arg): ?Variable
    {
        [$varFrame, $varName] = explode("@", $arg->val);
        if ($this->$varFrame == null) {
            throw new interpretException("non existing frame", 32);
        }
        if (!$this->$varFrame->inFrame($varName)) {
            throw new interpretException("not defined variable", 54);
        }
        $var = $this->$varFrame->getVar($varName);

        return $var;
    }

    // get value from symbol or from variable using isVar function
    private function getValue(string $name, arg $arg): Variable
    {

        if ($arg->type == "var") {
            $var = $this->isVar($arg);
            if ($var !== null) {
                $symb = new Variable($name, $var->val, $var->type);
                return $symb;
            } else {
                throw new interpretException("not variable", 53);
            }
        } else {
            $symb = new Variable($name, $arg->val, $arg->type);
            return $symb;
        }
    }

    /**
     * Get the frame and variable name associated with the given argument.
     *
     * @param arg $arg The argument containing the frame and variable name.
     * @return string[] An array containing the frame and the name of the variable.
     *                 The first element is the frame (instance of Frame).
     *                 The second element is the name of the variable.
     * @throws interpretException If the argument is not of type "var".
     */
    private function getFrame(arg $arg): array
    {
        if ($arg->type == "var") {
            [$frame, $name] = explode("@", $arg->val);
            if ($this->$frame == null) {
                throw new interpretException("non existing frame", 32);
            }
            if (!$this->$frame->inFrame($name)) {
                throw new interpretException("not defined variable", 54);
            }
            return [$frame, $name];
        } else {
            throw new interpretException("not variable", 88);
        }
    }

    /**
     * Get the frame and variable name associated with the given argument.
     *
     * @param Variable $symb The argument containing the frame and variable name.
     * @return bool
     */
    private function checkTypes($symb): bool
    {
        // Get the value and type from the symbol object
        $value = $symb->val;
        $type = $symb->type;

        // Check if the value matches the specified type
        switch ($type) {
            case 'int':
                return ctype_digit($value);
            case 'string':
                return is_string($value);
            case 'bool':
                if ($value == "true" || $value == "false") {
                    return true;
                }
                return false;
            case 'nil':
                return $value == "nil";
            default:
                // Handle unknown or unsupported types
                return false;
        }
    }
    /**
     * Check if mathematic functions works with integers.
     *
     * @param Variable $symb1 The argument containing the frame and variable name.
     * @param Variable $symb2 The argument containing the frame and variable name.
     * @return bool
     */
    private function checkInt($symb1, $symb2): bool
    {
        $value = $symb1->val;
        $type = $symb2->type;
        if (ctype_digit($symb1->val) && ctype_digit($symb2->val) && $symb1->type == "int" && $symb2->type == "int") {
            return true;
        }
        return false;
    }

    /**
     * DEFVAR function.
     *
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     * @throws interpretException When the first argument is not a variable.
     */
    private function DEFVAR($args): void
    {
        if ($args[0]->type == "var") {
            [$frame, $name] = explode("@", $args[0]->val);
            if ($this->$frame == null) {
                throw new interpretException("non existing frame", 32);
            }
            if ($this->$frame->inFrame($name)) {
                throw new interpretException("redefining variable", 52);
            }
            $this->$frame->addVar($name);
        } else {
            throw new interpretException("not variable", 54);
        }
    }

    /**
     * MOVE function.
     *
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     * @throws interpretException 
     */
    private function MOVE($args): void
    {
        // Initialize $symb
        $symb = null;

        [$frame, $name] = $this->getFrame($args[0]);

        if ($args[1]->type == "var") {
            $var = $this->isVar($args[1]);
            if ($var !== null) {
                $symb = new Variable($name, $var->val, $var->type);
            } else {
                throw new interpretException("not variable", 54);
            }
        } else {
            $symb = new Variable($name, $args[1]->val, $args[1]->type);
        }
        if (!$this->checkTypes($symb)) {
            throw new interpretException("wrong type", 53);
        }
        // Assign the symbol to the appropriate frame
        $this->$frame->assignValue($symb);
    }

    /**
     * CREATEFRAME function.
     *
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     */
    private function CREATEFRAME($args): void
    {
        // Check if the frame exists
        if ($this->TF !== null) {
            // Clear the content of the existing frame
            $this->TF->clearContent();
        } else {
            // Create a new frame if it doesn't exist
            $this->TF = new Frame();
        }
    }

    /**
     * PUSHFRAME function.
     *
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     */
    private function PUSHFRAME($args): void
    {
        // Check if the frame stack exists, if not, create one
        if ($this->FS == null) {
            $this->FS = new Stack();
        }

        $this->FS->push($this->TF);
        $topElement = $this->FS->top();

        // Check if the top element is an instance of the Frame class
        if ($topElement instanceof Frame) {
            // Assign the top element to $this->LF
            $this->LF = $topElement;
        } else {
            throw new interpretException("Expected an instance of Frame on the stack.", 55);
        }
        // Undefined the temporary frame (TF)
        $this->TF = null;
    }

    /**
     * POPFRAME function.
     *
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     * @throws interpretException 
     */
    private function POPFRAME($args): void
    {
        // Check if the frame stack (LF) exists and if it's not empty
        if ($this->FS == null || $this->FS->isEmpty()) {
            throw new interpretException("empty LF stack", 55);
        }

        // Pop the top frame from the frame stack (LF)
        /** @var Frame $topFrame */
        $topFrame = $this->FS->pop();
        $this->TF = $topFrame;

        // Get the top element from the frame stack
        $topElement = $this->FS->top();

        // Check if the top element is not false (indicating the stack is not empty)
        if ($topElement !== false) {
            // Check if the top element is an instance of the Frame class
            if ($topElement instanceof Frame) {
                // Assign the top element to $this->LF
                $this->LF = $topElement;
            } else {
                throw new interpretException("Expected an instance of Frame on the stack.", 55);
            }
        } else {
            $topElement = null;
        }

    }

    /**
     * CALL function.
     *
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     * @throws interpretException 
     */
    private function CALL($args): void
    {
        if ($args[0]->type == "label") {
            if (key_exists($args[0]->val, $this->labelmap)) {
                $this->CallS->push($this->i);
                $this->i = $this->labelmap[$args[0]->val];
            } else {
                throw new interpretException("empty Call stack1", 52);
            }
        } else {
            throw new interpretException("empty Call stack2", 52);
        }
    }

    /**
     * RETURN function.
     *
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     * @throws interpretException 
     */
    private function RETURN($args): void
    {
        if ($this->CallS == null || $this->CallS->isEmpty()) {
            throw new interpretException("empty Call stack", 56);
        }
        // Retrieve the integer value from the stack
        $poppedValue = $this->CallS->pop();

        // Check if the popped value is an integer
        if (is_int($poppedValue)) {
            $this->i = $poppedValue;
        } else {
            throw new interpretException("Expected an integer value on the stack.", 56);
        }
    }

    /**
     * PUSHS function.
     *
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     * @throws interpretException 
     */
    private function PUSHS($args): void
    {
        if ($args[0]->type == "var") {
            $var = $this->isVar($args[0]);
            if ($var !== null) {
                $sym = $var;
            } else {
                throw new interpretException("wrong variable", 56);
            }
        } else {
            $sym = $args[0];
        }
        if (!$this->checkTypes($sym)) {
            throw new interpretException("wrong type", 53);
        }
        $this->DataS->push([$sym->val, $sym->type]);
    }

    /**
     * POPS function.
     *
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     * @throws interpretException 
     */
    private function POPS($args): void
    {
        [$frame, $name] = $this->getFrame($args[0]);

        if ($this->DataS == null || $this->DataS->isEmpty()) {
            throw new interpretException("empty Data stack", 56);
        }
        $sym = $this->DataS->pop();

        // Check if $sym is an array with at least two elements
        if (is_array($sym) && count($sym) >= 2) {
            $symb = new Variable($name, $sym[0], $sym[1]);
        } else {
            throw new interpretException("Invalid data on the stack", 57);
        }
        $this->$frame->assignValue($symb);
    }

    /**
     * ADD function.
     *
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     */
    private function ADD($args): void
    {
        [$frame, $name] = $this->getFrame($args[0]);

        $sym1 = $this->getValue($name, $args[1]);
        $sym2 = $this->getValue($name, $args[2]);
        if (!$this->checkInt($sym1, $sym2)) {
            throw new interpretException("add non integer types", 53);
        }
        $result = (int)$sym1->val + (int)$sym2->val;
        $symb = new Variable($name, (string)$result, "int");
        $this->$frame->assignValue($symb);
    }

    /**
     * SUB function.
     *
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     */
    private function SUB($args): void
    {
        [$frame, $name] = $this->getFrame($args[0]);

        $sym1 = $this->getValue($name, $args[1]);
        $sym2 = $this->getValue($name, $args[2]);
        if (!$this->checkInt($sym1, $sym2)) {
            throw new interpretException("add non integer types", 53);
        }
        $result = (int)$sym1->val - (int)$sym2->val;
        $symb = new Variable($name, (string)$result, "int");
        $this->$frame->assignValue($symb);
    }

    /**
     * MUL function.
     *
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     */
    private function MUL($args): void
    {
        [$frame, $name] = $this->getFrame($args[0]);

        $sym1 = $this->getValue($name, $args[1]);
        $sym2 = $this->getValue($name, $args[2]);
        if (!$this->checkInt($sym1, $sym2)) {
            throw new interpretException("multiply non integer types", 53);
        }
        $result = (int)$sym1->val * (int)$sym2->val;
        $symb = new Variable($name, (string)$result, "int");
        $this->$frame->assignValue($symb);
    }


    /**
     * IDIV function.
     *
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     */
    private function IDIV($args): void
    {
        [$frame, $name] = $this->getFrame($args[0]);

        $sym1 = $this->getValue($name, $args[1]);
        $sym2 = $this->getValue($name, $args[2]);
        if (!$this->checkInt($sym1, $sym2)) {
            throw new interpretException("devide non integer types", 53);
        }
        if ($sym2->val == "0") {
            throw new interpretException("dividing by zero", 57);
        }
        $result = intdiv((int)$sym1->val, (int)$sym2->val);
        $symb = new Variable($name, (string)$result, "int");
        $this->$frame->assignValue($symb);
    }


    /**
     * LT function.
     *
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     */
    private function LT($args): void
    {
        [$frame, $name] = $this->getFrame($args[0]);

        $sym1 = $this->getValue($name, $args[1]);
        $sym2 = $this->getValue($name, $args[2]);
        if ($sym1->type != $sym2->type) {
            throw new interpretException("comparing different types", 53);
        }
        if (!$this->checkTypes($sym1) || $sym2->type == "nil") {
            throw new interpretException("wrong type", 53);
        }
        if (!$this->checkTypes($sym2) || $sym2->type == "nil") {
            throw new interpretException("wrong type", 53);
        }
        if ($sym1->val < $sym2->val) {
            $symb = new Variable($name, "true", "bool");
        } else {
            $symb = new Variable($name, "false", "bool");
        }

        $this->$frame->assignValue($symb);
    }

    /**
     * GT function.
     *
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     */
    private function GT($args): void
    {
        [$frame, $name] = $this->getFrame($args[0]);

        $sym1 = $this->getValue($name, $args[1]);
        $sym2 = $this->getValue($name, $args[2]);
        if ($sym1->type != $sym2->type) {
            throw new interpretException("comparing different types", 53);
        }
        if (!$this->checkTypes($sym1) || $sym2->type == "nil") {
            throw new interpretException("wrong type", 53);
        }
        if (!$this->checkTypes($sym2) || $sym2->type == "nil") {
            throw new interpretException("wrong type", 53);
        }
        if ($sym1->val > $sym2->val) {
            $symb = new Variable($name, "true", "bool");
        } else {
            $symb = new Variable($name, "false", "bool");
        }

        $this->$frame->assignValue($symb);
    }

    /**
     * EQ function.
     *
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     */
    private function EQ($args): void
    {
        [$frame, $name] = $this->getFrame($args[0]);

        $sym1 = $this->getValue($name, $args[1]);
        $sym2 = $this->getValue($name, $args[2]);

        if (!$this->checkTypes($sym1)) {
            throw new interpretException("wrong type", 53);
        }
        if (!$this->checkTypes($sym2)) {
            throw new interpretException("wrong type", 53);
        }
        if ($sym1->type != "nil" && $sym2->type != "nil") {
            if ($sym1->type != $sym2->type) {
                throw new interpretException("comparing different types", 53);
            }
        }

        if ($sym1->val == $sym2->val) {
            $symb = new Variable($name, "true", "bool");
        } else {
            $symb = new Variable($name, "false", "bool");
        }

        $this->$frame->assignValue($symb);
    }

    /**
     * AND function.
     *
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     */
    private function AND($args): void
    {
        [$frame, $name] = $this->getFrame($args[0]);

        $sym1 = $this->getValue($name, $args[1]);
        $sym2 = $this->getValue($name, $args[2]);
        if ($sym1->type != "bool" || $sym2->type != "bool" || !$this->checkTypes($sym1) || !$this->checkTypes($sym2)) {
            throw new interpretException("wrong type", 53);
        }
        if ($sym1->val == "true" && $sym2->val == "true") {
            $symb = new Variable($name, "true", "bool");
        } else {
            $symb = new Variable($name, "false", "bool");
        }
        $this->$frame->assignValue($symb);
    }

    /**
     * OR function.
     *
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     */
    private function OR($args): void
    {
        [$frame, $name] = $this->getFrame($args[0]);

        $sym1 = $this->getValue($name, $args[1]);
        $sym2 = $this->getValue($name, $args[2]);
        if ($sym1->type != "bool" || $sym2->type != "bool" || !$this->checkTypes($sym1) || !$this->checkTypes($sym2)) {
            throw new interpretException("wrong type", 53);
        }
        if (($sym1->val == "true") || ($sym2->val == "true")) {
            $symb = new Variable($name, "true", "bool");
        } else {
            $symb = new Variable($name, "false", "bool");
        }
        $this->$frame->assignValue($symb);
    }

    /**
     * NOT function.
     *
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     */
    private function NOT($args): void
    {
        [$frame, $name] = $this->getFrame($args[0]);

        $sym1 = $this->getValue($name, $args[1]);
        if ($sym1->type != "bool" || !$this->checkTypes($sym1)) {
            throw new interpretException("wrong type", 53);
        }
        if ($sym1->val == "true") {
            $symb = new Variable($name, "false", "bool");
        } else {
            $symb = new Variable($name, "true", "bool");
        }
        $this->$frame->assignValue($symb);
    }

    /**
     * INT2CHAR function.
     *
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     * @throws interpretException 
     */
    private function INT2CHAR($args): void
    {
        [$frame, $name] = $this->getFrame($args[0]);

        $sym = $this->getValue($name, $args[1]);
        if ($sym->type != "int" || !$this->checkTypes($sym)) {
            throw new interpretException("wrong type", 53);
        }
        $unicodeValue = (int)$sym->val;
        if ($unicodeValue >= 0 && $unicodeValue <= 1114111) {
            // Convert the Unicode value to a character
            $char = mb_chr($unicodeValue, 'UTF-8');
            $symb = new Variable($name, $char, "string");
            $this->$frame->assignValue($symb);
        } else {
            throw new interpretException("not unicode", 58);
        }
    }

    /**
     * STRI2INT function.
     * 
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     * @throws interpretException 
     */
    private function STRI2INT($args): void
    {
        [$frame, $name] = $this->getFrame($args[0]);

        $sym1 = $this->getValue($name, $args[1]);
        $sym2 = $this->getValue($name, $args[2]);
        if (!$this->checkTypes($sym1) || $sym1->type != "string") {
            throw new interpretException("first symbol is not string", 53);
        }
        if (!$this->checkTypes($sym2) || $sym2->type != "int") {
            throw new interpretException("second symbol is not int", 53);
        }
        if (is_string($sym1->val)) {
            if ($sym2->val >= 0 && $sym2->val < mb_strlen($sym1->val, 'UTF-8')) {
                // Get the character at the specified index
                $character = mb_substr($sym1->val, intval($sym2->val), 1, 'UTF-8');
                // Get the Unicode number of the character
                $unicodeNumber = mb_ord($character, 'UTF-8');

                $symb = new Variable($name, strval($unicodeNumber), "int");
                $this->$frame->assignValue($symb);
            } else {
                throw new interpretException("index out of range", 58);
            }
        }
    }

    /**
     * READ function.
     * 
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     * @throws interpretException 
     */
    private function READ($args): void
    {
        [$frame, $name] = $this->getFrame($args[0]);
        $sym1 = $this->getValue($name, $args[1]);
        if ($sym1->type != "type") {
            throw new interpretException("first symbol is not string", 32);
        }
        $value = $this->input->readString();
        if ($value == "" || $value == null) {
            $value = "nil";
            $sym1->val = "nil";
        }
        if (!is_string($sym1->val)) {
            throw new interpretException("first symbol is not string", 32);
        }
        $symb = new Variable($name, $value, $sym1->val);
        $this->$frame->assignValue($symb);
    }

    /**
     * WRITE function.
     * 
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     * @throws interpretException 
     */
    private function WRITE($args): void
    {
        if ($args[0]->type == "var") {
            $var = $this->isVar($args[0]);
            if ($var !== null) {
                $sym = $var;
            } else {
                throw new interpretException("index out of range", 58);
            }
        } else {
            $sym = $args[0];
        }

        if (!$this->checkTypes($sym)) {
            throw new interpretException("wrong type", 53);
        }
        if ($sym->type == "nil") {
            echo '';
        } else {
            echo $sym->val;
        }
    }
    /**
     * CONCAT function.
     * 
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     * @throws interpretException 
     */
    private function CONCAT($args): void
    {
        [$frame, $name] = $this->getFrame($args[0]);
        $sym1 = $this->getValue($name, $args[1]);
        $sym2 = $this->getValue($name, $args[2]);
        if (!$this->checkTypes($sym1)) {
            throw new interpretException("wrong type", 53);
        }
        if (!$this->checkTypes($sym2)) {
            throw new interpretException("wrong type", 53);
        }
        if ($sym1->type != "string" || $sym2->type != "string") {
            throw new interpretException("wrong type, expecting string", 53);
        }
        $symb = new Variable($name, $sym1->val . $sym2->val, "string");
        $this->$frame->assignValue($symb);
    }

    /**
     * STRLEN function.
     * 
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     * @throws interpretException 
     */
    private function STRLEN($args): void
    {
        [$frame, $name] = $this->getFrame($args[0]);
        $sym1 = $this->getValue($name, $args[1]);
        if (!is_string($sym1->val) || $sym1->type != "string") {
            throw new interpretException("first symbol is not string", 53);
        }
        $length = mb_strlen($sym1->val, 'UTF-8');
        $symb = new Variable($name, strval($length), "int");
        $this->$frame->assignValue($symb);
    }

    /**
     * GETCHAR function.
     * 
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     * @throws interpretException 
     */
    private function GETCHAR($args): void
    {
        [$frame, $name] = $this->getFrame($args[0]);
        $sym1 = $this->getValue($name, $args[1]);
        $sym2 = $this->getValue($name, $args[2]);

        if (!$this->checkTypes($sym1)) {
            throw new interpretException("wrong type", 53);
        }
        if (!$this->checkTypes($sym2)) {
            throw new interpretException("wrong type", 53);
        }
        if (!is_string($sym1->val) || $sym1->type != "string") {
            throw new interpretException("first symbol is not string", 53);
        }
        if (!is_int(intval($sym2->val)) || $sym2->type != "int") {
            throw new interpretException("second symbol is not int", 53);
        }
        if ($sym2->val >= 0 && $sym2->val < mb_strlen($sym1->val, 'UTF-8')) {
            // Get the character at the specified index
            $character = mb_substr($sym1->val, intval($sym2->val), 1, 'UTF-8');
            $symb = new Variable($name, $character, "string");
            $this->$frame->assignValue($symb);
        } else {
            throw new interpretException("index out of range", 58);
        }
    }

    /**
     * SETCHAR function.
     * 
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     * @throws interpretException 
     */
    private function SETCHAR($args): void
    {
        [$frame, $name] = $this->getFrame($args[0]);
        $variab = $this->$frame->getVar($name);
        $varVal = $variab->val;

        $sym1 = $this->getValue($name, $args[1]);
        $sym2 = $this->getValue($name, $args[2]);

        if (!is_string($sym2->val) || $sym2->type != "string") {
            throw new interpretException("first symbol is not string", 53);
        }
        if (!ctype_digit($sym1->val) || $sym1->type != "int") {
            throw new interpretException("second symbol is not int", 53);
        }
        $firstChar = mb_substr($sym2->val, 0, 1, 'UTF-8');

        $val = intval($sym1->val);
        $varValLength = mb_strlen($varVal, 'UTF-8');

        if (!($val < $varValLength)) {
            throw new interpretException("index out of range", 58);
        }
        // Split the string into two parts around the character to replace
        $before = mb_substr($varVal, 0, intval($sym1->val), 'UTF-8');
        $after = mb_substr($varVal, intval($sym1->val) + 1, null, 'UTF-8');

        $newVarVal = $before . $firstChar . $after;

        $symb = new Variable($name, $newVarVal, "string");
        $this->$frame->assignValue($symb);
    }

    /**
     * TYPE function.
     * 
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     * @throws interpretException 
     */
    private function TYPE($args): void
    {
        [$frame, $name] = $this->getFrame($args[0]);
        $sym1 = $this->getValue($name, $args[1]);

        $type = isset($sym1->type) ? $sym1->type : "";

        $symb = new Variable($name, $type, "string");
        $this->$frame->assignValue($symb);
    }
    /**
     * LABEL function.
     * 
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     */
    private function LABEL($args): void
    {
    }

    /**
     * JUMP function.
     * 
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     * @throws interpretException 
     */
    private function JUMP($args): void
    {
        if ($args[0]->type == "label") {

            if (key_exists($args[0]->val, $this->labelmap)) {
                $this->i = $this->labelmap[$args[0]->val];
            } else {
                throw new interpretException("index out of range", 58);
            }
        } else {
            throw new interpretException("index out of range", 58);
        }
    }

    /**
     * JUMPIFEQ function.
     * 
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     * @throws interpretException 
     */
    private function JUMPIFEQ($args): void
    {

        if ($args[1]->type == "var") {
            $var = $this->isVar($args[1]);
            if ($var !== null) {
                $sym1 = $var;
            } else {
                throw new interpretException("index out of range", 58);
            }
        } else {
            $sym1 = $args[1];
        }
        if ($args[2]->type == "var") {
            $var = $this->isVar($args[2]);
            if ($var !== null) {
                $sym2 = $var;
            } else {
                throw new interpretException("index out of range", 58);
            }
        } else {
            $sym2 = $args[2];
        }
        if (!$this->checkTypes($sym1)) {
            throw new interpretException("wrong type", 53);
        }
        if (!$this->checkTypes($sym2)) {
            throw new interpretException("wrong type", 53);
        }

        if ($args[0]->type == "label"  && $sym1->type == $sym2->type) {
            if ((int)$sym1->val == (int)$sym2->val) {
                if (key_exists($args[0]->val, $this->labelmap)) {
                    $this->i = $this->labelmap[$args[0]->val];
                } else {
                    throw new interpretException("index out of range", 58);
                }
            }
        } else {
            throw new interpretException("wrong compare", 53);
        }
    }

    /**
     * JUMPIFNEQ function.
     * 
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     * @throws interpretException 
     */
    private function JUMPIFNEQ($args): void
    {
        if ($args[1]->type == "var") {
            $var = $this->isVar($args[1]);
            if ($var !== null) {
                $sym1 = $var;
            } else {
                throw new interpretException("index out of range", 58);
            }
        } else {
            $sym1 = $args[1];
        }
        if ($args[2]->type == "var") {
            $var = $this->isVar($args[2]);
            if ($var !== null) {
                $sym2 = $var;
            } else {
                throw new interpretException("index out of range", 58);
            }
        } else {
            $sym2 = $args[2];
        }
        if (!$this->checkTypes($sym1)) {
            throw new interpretException("wrong type", 53);
        }
        if (!$this->checkTypes($sym2)) {
            throw new interpretException("wrong type", 53);
        }

        if ($args[0]->type == "label"  && $sym1->type == $sym2->type) {
            if ((int)$sym1->val != (int)$sym2->val) {
                if (key_exists($args[0]->val, $this->labelmap)) {
                    $this->i = $this->labelmap[$args[0]->val];
                } else {
                    throw new interpretException("index out of range", 58);
                }
            }
        } else {
            throw new interpretException("wrong compare", 53);
        }
    }


    /**
     * EXIT function.
     * 
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     * @throws interpretException 
     */
    private function EXIT($args): void
    {
        if ($args[0]->type == "var") {
            $var = $this->isVar($args[0]);
            if ($var !== null) {
                $sym1 = $var;
            } else {
                throw new interpretException("index out of range", 58);
            }
        } else {
            $sym1 = $args[0];
        }
        if (!$this->checkTypes($sym1) || $sym1->type != "int") {
            throw new interpretException("wrong type", 53);
        }
        $value = intval($sym1->val);
        if ($value >= 0 && $value <= 9) {
            exit($value);
        } else {
            throw new interpretException("wrong exit code", 57);
        }
    }


    /**
     * DPRINT function.
     * 
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     * @throws interpretException 
     */
    private function DPRINT($args): void
    {
        if ($args[0]->type == "var") {

            $var = $this->isVar($args[0]);
            if ($var !== null) {
                $sym1 = $var;
            } else {
                throw new interpretException("wrong exit code", 57);
            }
        } else {
            $sym1 = $args[0];
        }
        if (!$this->checkTypes($sym1)) {
            throw new interpretException("wrong type", 53);
        }
        fwrite(STDERR, $sym1->val);
    }

    /**
     * BREAK function.
     * 
     * @param \DOMNodeList<\DOMElement> $args The list of DOMElement arguments.
     * @throws interpretException 
     */
    private function BREAK($args): void
    {
    }
}
