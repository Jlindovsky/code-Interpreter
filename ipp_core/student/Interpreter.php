<?php
/** 
 * autor: Jan Lindovsky
 */ 
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
        $this->numOfInstr = 0;
        $this->i = 0;

        $this->dom = $this->source->getDOMDocument();
        $this->progCheck();

        //loop through instructions
        for ($this->i = 0; $this->i <= $this->maxOrder; $this->i++) {

            if (key_exists($this->i, $this->instMap)) {
                $method = $this->instMap[$this->i]->opcode;
                $this->$method($this->instMap[$this->i]->args);
            }
        }

        return 0;
    }
}
