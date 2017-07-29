<?php

namespace Alg;

/**
 * Class Search
 * @package Alg
 */
class Search
{
    /**
     * Binary search implementation.
     *
     * @param array $list
     * @param string $char
     * @return int|string
     */
    public static function binary(array $list, string $char): ?int
    {
        $low = 0;
        $high = count($list) - 1;

        while ($low <= $high) {
            $mid = intdiv($low + $high, 2);
            $guess = $list[$mid];
            if ($guess == $char) {
                return $mid;
            }

            if ($guess > $char) {
                $high = $mid - 1;
            } else {
                $low = $mid + 1;
            }
        }

        return null;
    }
}