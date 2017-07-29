<?php

namespace Alg;

class Recursion
{
    /**
     * Sum of array elements.
     *
     * @param array $list
     * @return int
     */
    public static function sum(array $list): int
    {
        if (!count($list)) {
            return 0;
        }

        return array_shift($list) + self::sum($list);
    }

    /**
     * Get count of elements in array.
     *
     * @param array $list
     * @return int
     */
    public static function count(array $list): int
    {
        if (!$list) {
            return 0;
        }

        array_shift($list);
        return 1 + self::count($list);
    }

    /**
     * Find max element in array.
     *
     * @param array $list
     * @param int $max
     * @return int
     */
    public static function max(array $list, int $max = 0): int
    {
        if (!$list) {
            return $max;
        }

        $tmp = max($max, array_shift($list));
        return self::max($list, $tmp);
    }
}