<?php

namespace IPP\Student;

use IPP\Core\Exception\InternalErrorException;


class Frame
{

    /**
     * @var Variable[]
     */
    protected array $map;

    /**
     * @param Variable[] $init
     */
    public function __construct($init = array())
    {
        $this->map = $init;
    }

    /**
     * Add a variable to the frame's map.
     *
     * @param string $varName The name of the variable to add.
     *
     * @return void
     */
    public function addVar(string $varName)
    {
        $this->map[$varName] = new Variable($varName, null, null);
    }

    /**
     * Assign a value to a variable in the frame's map.
     *
     * @param Variable $symb The variable with the value to assign.
     *
     * @return void
     */
    public function assignValue(Variable $symb): void
    {
        $this->map[$symb->name] = $symb;
    }

    public function getVar(string $name): Variable
    {
        return $this->map[$name];
    }

    /**
     * Clear the content of the frame.
     *
     * @return void
     */
    public function clearContent(): void
    {
        $this->map = array();
    }

    public function inFrame(string $name): bool
    {
        return isset($this->map[$name]);
    }
}
