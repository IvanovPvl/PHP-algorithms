<?php

namespace Tests;

use Alg\Search;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

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