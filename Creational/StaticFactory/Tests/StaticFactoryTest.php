<?php

namespace DesignPatterns\Creational\StaticFactory\Tests;

use DesignPatterns\Creational\StaticFactory\StaticFactory;

/**
 * Class StaticFactoryTest
 * @package DesignPatterns\Creational\StaticFactory\Tests
 */
class StaticFactoryTest extends \PHPUnit_Framework_TestCase
{

    public function getTypeList()
    {
        return [
            ['string'],
            ['number'],
        ];
    }

    /**
     * @dataProvider getTypeList
     */
    public function testCreation($type)
    {
        $obj = StaticFactory::factory($type);
        $this->assertInstanceOf('DesignPatterns\Creational\StaticFactory\FormatterInterface', $obj);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testException()
    {
        StaticFactory::factory("");
    }
}
