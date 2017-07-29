<?php

namespace Tests;

use PHPUnit\Framework\{
    Assert,
    TestCase
};

use Alg\Recursion;

class RecursionTest extends TestCase
{
    /**
     * @test
     */
    public function sum()
    {
        $list = [1, 2, 3, 4, 5, 6];
        Assert::assertEquals(21, Recursion::sum($list));
    }

    /**
     * @test
     */
    public function count()
    {
        $list = [1, 2, 3, 4, 5, 6];
        Assert::assertEquals(6, Recursion::count($list));
    }

    /**
     * @test
     */
    public function max()
    {
        $list = [1, 2, 3, 10, 4, 5, 6];
        Assert::assertEquals(10, Recursion::max($list));
    }
}