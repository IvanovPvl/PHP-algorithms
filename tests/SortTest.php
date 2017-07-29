<?php

namespace Tests;

use PHPUnit\Framework\{
    Assert,
    TestCase
};

use Alg\Sort;

/**
 * Class SortTest
 * @package Tests
 */
class SortTest extends TestCase
{
    /**
     * @test
     */
    public function selection()
    {
        $list = [5, 6, 1, 9, 3, 1];
        Assert::assertEquals([1, 1, 3, 5, 6, 9], Sort::selection($list));
    }
}