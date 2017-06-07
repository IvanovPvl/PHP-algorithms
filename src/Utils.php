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
            if (strpos('([{', $symbol) !== false) {
                $stack->push($symbol);
            } else {
                if ($stack->isEmpty()) {
                    $balanced = false;
                } else {
                    $top = $stack->pop();
                    if (!self::matches($top, $symbol)) {
                        $balanced = false;
                    }
                }
            }

            $index++;
        }

        if ($balanced && $stack->isEmpty()) {
            return true;
        }

        return false;
    }

    /**
     * Divide by 2.
     *
     * @param $number
     * @return string
     */
    public static function divideBy2($number)
    {
        $stack = new Stack();
        while ($number > 0) {
            $stack->push($number % 2);
            $number = intdiv($number, 2);
        }

        $s = '';
        while ($stack->size()) {
            $s .= $stack->pop();
        }

        return $s;
    }

    private static function matches($open, $close)
    {
        $opens = '([{';
        $closers = ')]}';
        return strpos($opens, $open) === strpos($closers, $close) && strpos($opens, $open) !== false
            && strpos($closers, $close) !== false;
    }
}