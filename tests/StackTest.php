<?php

namespace Tests;

use PHPUnit\Framework\ {
    Assert,
    TestCase
};

use Alg\ {
    Stack,
    Utils
};

class StackTest extends TestCase
{
    /**
     * @test
     */
    public function stack()
    {
        $stack = new Stack();
        Assert::assertTrue($stack->isEmpty());
        Assert::assertEquals(0, $stack->size());
        Assert::assertNull($stack->pop());
        Assert::assertNull($stack->peek());

        $item = 1;
        $stack->push($item);
        Assert::assertFalse($stack->isEmpty());
        Assert::assertEquals(1, $stack->size());
        Assert::assertEquals($item, $stack->peek());
        Assert::assertEquals($item, $stack->pop());
        Assert::assertTrue($stack->isEmpty());
        Assert::assertEquals(0, $stack->size());
    }

    /**
     * @test
     */
    public function parChecker()
    {
        Assert::assertTrue(Utils::parChecker('((()))'));
        Assert::assertFalse(Utils::parChecker(')))((('));
        Assert::assertFalse(Utils::parChecker('((())'));
        Assert::assertTrue(Utils::parChecker('[{()}]'));
        Assert::assertFalse(Utils::parChecker('[{()]]'));
    }
}