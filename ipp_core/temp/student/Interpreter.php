<?php

namespace IPP\Student;

use DOMDocument;
use IPP\Core\AbstractInterpreter;
use DOMNodeList;
use DOMElement;

class Interpreter extends AbstractInterpreter
{
    protected int $maxOrder = 0;
    protected int $i;
    protected int $numOfInstr;
    /**
     * @var \DOMNodeList<\DOMElement> $instructions
     */
    protected $instructions;

    /**
     * @var \DOMNodeList<\DOMElement> $program
     */
    protected $program;

    /**
     * @var \DOMNodeList<\DOMElement> $args
     */
    protected $args;
    protected int $numArgs;
    protected Stack $FS;
    protected Stack $CallS;
    protected Stack $DataS;
    protected Frame $GF;
    protected ?Frame $TF = null;
    protected ?Frame $LF = null;
    protected DOMDocument $dom;
    protected opcodeCheck $opcodeCheckObj;
    /**
     * @var array<string,int> $labelmap
     */
    protected $labelmap = array();

    /**
     * @var inst[] Array of inst class objects.
     * This array maps instruction names to their respective inst class objects.
     */
    protected array $instMap = array();


    use Functions;
    use preProcess;

    public function execute(): int
    {
        $this->GF = new Frame();
        $this->FS = new Stack();
        $this->DataS = new Stack();
        $this->CallS = new Stack();
        $this->opcodeCheckObj = new opcodeCheck();
        // TODO: Start your code here
        // Check \IPP\Core\AbstractInterpreter for predefined I/O objects:
        $this->numOfInstr = 0;
        $this->i = 0;

        $this->dom = $this->source->getDOMDocument();
        $this->progCheck();

        // foreach ($this->labelmap as $inst) {
        //     echo "index: " . $inst . "\n";
        //     echo "\n";
        // }

        for ($this->i = 0; $this->i <= $this->maxOrder; $this->i++) {

            if (key_exists($this->i, $this->instMap)) {
                $method = $this->instMap[$this->i]->opcode;
                $this->$method($this->instMap[$this->i]->args);
            }
        }

        // echo "\nData Stack (DataS):\n"; // Output header for the data stack

        // if ($this->DataS->isEmpty()) {
        //     // If the data stack is undefined or empty
        //     echo "Empty\n"; // Output "Empty"
        // } else {
        //     // If the data stack is not empty
        //     $stackCopy = clone $this->DataS; // Clone the data stack
        //     while (!$stackCopy->isEmpty()) {
        //         // Iterate until the cloned stack is empty
        //         $element = $stackCopy->pop(); // Pop the top element from the cloned stack
        //         echo $element[0] . " " . $element[1] . "\n"; // Output the element followed by a newline
        //     }
        // }


        // echo "Temporary Frame (TF):\n";
        // if ($this->TF === null) {
        //     echo "Undefined\n";
        // } else {
        //     print_r($this->TF);
        // }

        // echo "\nFrame Stack (FS):\n";
        // if ($this->FS === null || $this->FS->isEmpty()) {
        //     echo "Empty\n";
        // } else {
        //     // Print each frame in the stack
        //     $stackCopy = clone $this->FS;
        //     while (!$stackCopy->isEmpty()) {
        //         $frame = $stackCopy->pop();
        //         print_r($frame);
        //         echo "\n";
        //     }
        // }
        return 0;
    }
}
