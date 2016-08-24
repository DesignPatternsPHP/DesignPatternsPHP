<?php

namespace DesignPatterns\Creational\StaticFactory\Tests;

use DesignPatterns\Creational\StaticFactory\StaticFactory;

/**
 * Tests for Static Factory pattern.
 */
class StaticFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function getTypeList()
    {
        return array(
            array('string'),
            array('number'),
        );
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
     * @expectedException InvalidArgumentException
     */
    public function testException()
    {
        StaticFactory::factory('');
    }
}
