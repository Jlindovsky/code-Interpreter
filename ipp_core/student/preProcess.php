<?php
/** 
 * autor: Jan Lindovsky
 */ 
namespace IPP\Student;

use DOMElement;

trait preProcess
{

    public function escape(string $data): ?string
    {
        return preg_replace_callback('/\\\\([0-9]{3})/', function ($matches) {
            return chr(intval($matches[1]));
        }, $data);
    }

    private function parseInst(DOMElement $instruction): void
    {
        $inst = new inst();
        $argArr = array();

        $opcode = strtoupper($instruction->getAttribute('opcode'));
        if (!key_exists($opcode, $this->opcodeCheckObj->opcodeMap)) {
            throw new interpretException("wrong opcode", 32);
        }
        if ($opcode == "LABEL") {
            $order = intval($instruction->getAttribute('order'));
            if ($order <= 0) {
                throw new interpretException("negative or null instruction order", 32);
            }
            $args = $instruction->childNodes;
            if ($instruction->childElementCount != $this->opcodeCheckObj->opcodeMap[$opcode]) {
                throw new interpretException("wrong number of arguments", 32);
            }
            if (!$args[1]->hasAttribute("type")) {
                throw new interpretException("argument missing type.", 32);
            }
            if (!is_string($args[1]->nodeValue)) {
                throw new interpretException("first symbol is not string", 32);
            }
            if (isset($this->labelmap[$args[1]->nodeValue])) {
                // Label already exists, handle the error
                throw new interpretException("Label already exists", 52);
            } else {
                // Label does not exist, add it to $this->labelmap
                $this->labelmap[$args[1]->nodeValue] = $order;
            }
        }
        $args = $instruction->childNodes;
        if ($instruction->childElementCount != $this->opcodeCheckObj->opcodeMap[$opcode]) {
            throw new interpretException("wrong number of arguments", 32);
        }
        foreach ($args as $arg) {
            if (preg_match('/arg(\d+)/', $arg->nodeName, $matches)) {
                $index = intval($matches[1]);
                if ($index <= 0) {
                    throw new interpretException("wrong number argument", 32);
                }
                $argument = new arg();
                // Check if $arg is a DOMElement
                if ($arg instanceof DOMElement) {
                    // Access the "type" attribute of the DOMElement
                    if ($arg->hasAttribute("type")) {
                        $argument->type = $arg->getAttribute("type");
                    } else {
                        throw new interpretException("argument missing type.", 32);
                    }
                } else {
                    throw new interpretException("wrong a DOMElement.", 32);
                }


                $argument->val = $arg->nodeValue ?? "";
                $argument->val = trim($argument->val);
                if ($argument->type == "string") {
                    $escapedValue = $this->escape($argument->val);
                    if ($escapedValue !== null) {
                        $argument->val = $escapedValue;
                    } else {

                        throw new interpretException("wrong format.", 32);
                    }
                }
                if (isset($argArr[$index - 1])) {
                    throw new interpretException("arguments with same order number.", 32);
                }
                $argArr[$index - 1] = $argument;
            } else if ($arg->nodeName == "#text") {
            } else {
                throw new interpretException("not arg in instruction.", 32);
            }
        }
        $inst->args = $argArr;
        $inst->opcode = $opcode;
        $order = intval($instruction->getAttribute('order'));
        if ($order <= 0) {
            throw new interpretException("negative or null instruction order", 32);
        }
        if ($order > $this->maxOrder) {
            $this->maxOrder = $order;
        }
        if (isset($this->instMap[$order])) {
            throw new interpretException("duplicate in instruction order.", 32);
        }
        $this->instMap[$order] = $inst;
    }

    private function progCheck(): void
    {
        $this->program = $this->dom->getElementsByTagName("program");
        $programElement = $this->program->item(0); // Get the first program element

        if ($programElement !== null) {
            if ($programElement->getAttribute("language") != "IPPcode24") {
                throw new interpretException("Wrong language", 32);
            }
        } else {
            // Handle the case where the <program> element is not found
            throw new interpretException("No <program> element found", 32);
        }
        if ($this->program !== null) { // Check if $this->program is not null
            foreach ($this->program[0]->childNodes as $prog) {
                if ($prog->nodeName == "#text") {
                    continue;
                } else if ($prog->nodeName == "instruction") {
                    $this->parseInst($prog);
                } else {
                    throw new interpretException("not an instruction", 32);
                }
            }
        } else {
            throw new interpretException("missing program", 32);
        }
    }
}
