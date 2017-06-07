<?php

namespace Alg;

use Exception;

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
     * Convert to base.
     *
     * @param $number
     * @param $base
     * @return string
     * @throws Exception
     */
    public function baseConverter($number, $base)
    {
        if ($base > 16) {
            throw new Exception('Base must be less or equal than 16.');
        }

        $digits = '0123456789ABCDEF';

        $stack = new Stack();
        while ($number > 0) {
            $stack->push($number % $base);
            $number = intdiv($number, $base);
        }

        $s = '';
        while ($stack->size()) {
            $s .= $digits[$stack->pop()];
        }

        return $s;
    }

    /**
     * Convert to 2 base.
     *
     * @param $number
     * @return string
     */
    public static function divideBy2($number)
    {
        return self::baseConverter($number, 2);
    }

    private static function matches($open, $close)
    {
        $opens = '([{';
        $closers = ')]}';
        return strpos($opens, $open) === strpos($closers, $close) && strpos($opens, $open) !== false
            && strpos($closers, $close) !== false;
    }
}