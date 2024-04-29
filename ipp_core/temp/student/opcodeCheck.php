<?php

namespace IPP\Student;


class opcodeCheck
{

    /**
     * @var array<string, int> The opcode map containing opcode names as keys and their corresponding number of arguments as values.
     */
    public $opcodeMap = array(
        'MOVE' => 2,
        'CREATEFRAME' => 0,
        'PUSHFRAME' => 0,
        'POPFRAME' => 0,
        'DEFVAR' => 1,
        'CALL' => 1,
        'RETURN' => 0,
        'PUSHS' => 1,
        'POPS' => 1,
        'ADD' => 3,
        'SUB' => 3,
        'MUL' => 3,
        'IDIV' => 3,
        'INT2CHAR' => 2,
        'STRI2INT' => 3,
        'READ' => 2,
        'WRITE' => 1,
        'CONCAT' => 3,
        'STRLEN' => 2,
        'GETCHAR' => 3,
        'SETCHAR' => 3,
        'TYPE' => 2,
        'LABEL' => 1,
        'JUMP' => 1,
        'JUMPIFEQ' => 3,
        'JUMPIFNEQ' => 3,
        'EXIT' => 1,
        'DPRINT' => 1,
        'BREAK' => 0,
        'LT' => 3,
        'GT' => 3,
        'EQ' => 3,
        'AND' => 3,
        'OR' => 3,
        'NOT' => 2
    );
}
