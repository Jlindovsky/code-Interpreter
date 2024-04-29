<?php

namespace IPP\Student;

use IPP\Core\Exception\InternalErrorException;


class Variable
{

    public string $name;
    public string|int|bool|float|null $val;
    public ?string $type;

    /**
     * @param string $name
     * @param string|int|bool|float|null $val
     * @param string|null $type
     */
    public function __construct($name, $val, $type)
    {
        $this->name = $name;
        $this->val = $val;
        $this->type = $type;
    }
}
