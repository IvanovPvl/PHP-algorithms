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

        return $list[0] + self::sum(array_slice($list, 1));
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

        return 1 + self::count(array_slice($list, 1));
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

        $tmp = max($max, $list[0]);
        return self::max(array_slice($list, 1), $tmp);
    }

    public static function exists(array $list, int $element): bool
    {
        if (count($list) == 1) {
            return $list[0] == $element;
        }

        $low = 0;
        $high = count($list) - 1;
        $mid = intdiv($low + $high, 2);
        $guess = $list[$mid];
        if ($guess == $element) {
            return true;
        }

        if ($guess > $element) {
            return self::exists(array_slice($list, $low, $mid - 1), $element);
        }

        return self::exists(array_slice($list, $mid + 1), $element);
    }
}