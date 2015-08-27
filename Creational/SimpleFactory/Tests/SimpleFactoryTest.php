<?php
declare(strict_types = 1);

namespace DesignPatterns\Creational\SimpleFactory\Tests;

use DesignPatterns\Creational\SimpleFactory\ConcreteFactory;

/**
 * Class SimpleFactoryTest
 * @package DesignPatterns\Creational\SimpleFactory\Tests
 */
class SimpleFactoryTest extends \PHPUnit_Framework_TestCase
{

    /** @var  ConcreteFactory */
    protected $factory;

    public function getType()
    {
        return [
            ['bicycle'],
            ['other'],
        ];
    }

    protected function setUp()
    {
        $this->factory = new ConcreteFactory();
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
