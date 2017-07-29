<?php

namespace Tests;

use PHPUnit\Framework\{
    Assert,
    TestCase
};

use Alg\Search;

class SearchTest extends TestCase
{
    /**
     * @test
     */
    public function binary()
    {
        $list = ['a', 'b', 'c', 'd', 'e'];
        Assert::assertEquals(3, Search::binary($list, 'd'));
        Assert::assertNull(Search::binary($list, 'f'));
    }
}