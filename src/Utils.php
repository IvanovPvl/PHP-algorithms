<?php

namespace Alg;

/**
 * Class Utils
 * @package Alg
 */
class Utils
{
    /**
     * Check parenthesis in string.
     *
     * @param string $str
     *
     * @return bool
     */
    public static function parChecker(string $str): bool
    {
        $stack = new Stack();
        $balanced = true;
        $index = 0;
        while ($index < strlen($str) && $balanced) {
            $symbol = $str[$index];
            if ($symbol == '(') {
                $stack->push($symbol);
            } else {
                if ($stack->isEmpty()) {
                    $balanced = false;
                } else {
                    $stack->pop();
                }
            }

            $index++;
        }

        if ($balanced && $stack->isEmpty()) {
            return true;
        }

        return false;
    }
}