<?php

namespace IPP\Student;

use IPP\Core\Exception\InternalErrorException;



class Stack
{

    /** @var mixed[] */
    protected array $stack;

    /** @param mixed[] $init The initial array to initialize the stack. */
    public function __construct(array $init = [])
    {
        $this->stack = $init;
    }

    /**
     * @param mixed $item The item to push onto the stack.
     * @return void
     */
    public function push($item)
    {
        array_unshift($this->stack, $item);
    }

    /**
     * Removes and returns the first element from the stack.
     * 
     * @return mixed|null The first element from the stack, or null if the stack is empty.
     */
    public function pop()
    {
        if ($this->isEmpty()) {
            throw new InternalErrorException('Stack is empty!');
        } else {
            return array_shift($this->stack);
        }
    }


    /**
     * Returns the top element of the stack.
     * 
     * @return mixed|false The top element of the stack, or false if the stack is empty.
     */
    public function top()
    {
        // Move the internal pointer to the last element of the stack
        end($this->stack);

        // Get the value of the current element pointed to by the internal pointer
        $topElement = current($this->stack);

        // Reset the internal pointer back to the first element
        reset($this->stack);

        return $topElement !== false ? $topElement : false;
    }


    /**
     * Checks if the stack is empty.
     * 
     * @return bool True if the stack is empty, false otherwise.
     */
    public function isEmpty(): bool
    {
        return empty($this->stack);
    }
}
