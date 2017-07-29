<?php

namespace Alg;

/**
 * Class Sort
 * @package Alg
 */
class Sort
{
    /**
     * Sort by selection.
     *
     * @param array $list
     * @return array
     */
    public static function selection(array $list): array
    {
        $result = [];
        $tmp = $list;
        $count = count($list);
        for ($i = 0;  $i < $count; $i++) {
            $smallest = Utils::smallest($tmp);
            $result[] = $tmp[$smallest];
            unset($tmp[$smallest]);
        }

        return $result;
    }
}