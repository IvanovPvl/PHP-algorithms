<?php

namespace Alg;

/**
 * Class Stack
 * @package Alg
 */
class Stack
{
    private $elements = [];

    /**
     * Add item to stack.
     *
     * @param $item
     */
    public function push($item): void
    {
        $this->elements[] = $item;
    }

    /**
     * Remove top element from stack.
     *
     * @return mixed
     */
    public function pop()
    {
        return array_pop($this->elements);
    }

    /**
     * Get top element from stack.
     *
     * @return mixed|null
     */
    public function peek()
    {
        return !empty($this->elements) ? $this->elements[count($this->elements) - 1] : null;
    }

    /**
     * Check stack for empty.
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
        return empty($this->elements);
    }

    /**
     * Get count of elements in stack.
     *
     * @return int
     */
    public function size(): int
    {
        return count($this->elements);
    }
}