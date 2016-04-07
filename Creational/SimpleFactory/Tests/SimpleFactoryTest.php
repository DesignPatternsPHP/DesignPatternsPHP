<?php

namespace DesignPatterns\Creational\SimpleFactory\Tests;

use DesignPatterns\Creational\SimpleFactory\SimpleFactory;

/**
 * SimpleFactoryTest tests the Simple Factory pattern.
 */
class SimpleFactoryTest extends \PHPUnit_Framework_TestCase
{
    protected $factory;

    protected function setUp()
    {
        $this->factory = new SimpleFactory();
    }

    public function getType()
    {
        return array(
            array('bicycle'),
            array('other'),
        );
    }

    /**
     * @dataProvider getType
     */
    public function testCreation($type)
    {
        $obj = $this->factory->createVehicle($type);
        $this->assertInstanceOf('DesignPatterns\Creational\SimpleFactory\VehicleInterface', $obj);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testBadType()
    {
        $this->factory->createVehicle('car');
    }
}
