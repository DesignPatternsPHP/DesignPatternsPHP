<?php

namespace DesignPatterns\More\LazyLoading\Tests;

use DesignPatterns\More\LazyLoading\CallCounter;
use DesignPatterns\More\LazyLoading\Heavy;
use DesignPatterns\More\LazyLoading\Holder;
use PHPUnit\Framework\TestCase;

class HolderTest extends TestCase
{
    public function testGetHeavy()
    {
        $counter = new CallCounter();

        $holder = new Holder(new Heavy($counter));
        $this->assertSame(0, $counter->getCount());
        $holder->getHeavyData();
        $this->assertSame(1, $counter->getCount());
        $holder->getHeavyData();
        $this->assertSame(1, $counter->getCount());
    }
}
