<?php

namespace IPP\Student;

use IPP\Core\Exception\IPPException;

class interpretException extends IPPException
{

    public function __construct(string $mess, int $code)
    {
        parent::__construct($mess, $code);
    }
}
