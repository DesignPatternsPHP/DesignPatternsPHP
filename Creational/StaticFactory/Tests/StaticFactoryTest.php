<?php

namespace DesignPatterns\Creational\StaticFactory\Tests;

use DesignPatterns\Creational\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateNumberFormatter()
    {
        $this->assertInstanceOf(
            'DesignPatterns\Creational\StaticFactory\FormatNumber',
            StaticFactory::factory('number')
        );
    }

    public function testCanCreateStringFormatter()
    {
        $this->assertInstanceOf(
            'DesignPatterns\Creational\StaticFactory\FormatString',
            StaticFactory::factory('string')
        );
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testException()
    {
        StaticFactory::factory('object');
    }
}
