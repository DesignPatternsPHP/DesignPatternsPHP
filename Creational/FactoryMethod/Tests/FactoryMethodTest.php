<?php

namespace DesignPatterns\Creational\FactoryMethod\Tests;

use DesignPatterns\Creational\FactoryMethod\FactoryMethod;
use DesignPatterns\Creational\FactoryMethod\GermanFactory;
use DesignPatterns\Creational\FactoryMethod\ItalianFactory;

class FactoryMethodTest extends \PHPUnit_Framework_TestCase
{
    public function testCanCreateCheapVehicleInGermany()
    {
        $factory = new GermanFactory();
        $result = $factory->create(FactoryMethod::CHEAP);

        $this->assertInstanceOf('DesignPatterns\Creational\FactoryMethod\Bicycle', $result);
    }

    public function testCanCreateFastVehicleInGermany()
    {
        $factory = new GermanFactory();
        $result = $factory->create(FactoryMethod::FAST);

        $this->assertInstanceOf('DesignPatterns\Creational\FactoryMethod\CarMercedes', $result);
    }

    public function testCanCreateCheapVehicleInItaly()
    {
        $factory = new ItalianFactory();
        $result = $factory->create(FactoryMethod::CHEAP);

        $this->assertInstanceOf('DesignPatterns\Creational\FactoryMethod\Bicycle', $result);
    }

    public function testCanCreateFastVehicleInItaly()
    {
        $factory = new ItalianFactory();
        $result = $factory->create(FactoryMethod::FAST);

        $this->assertInstanceOf('DesignPatterns\Creational\FactoryMethod\CarFerrari', $result);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage spaceship is not a valid vehicle
     */
    public function testUnknownType()
    {
        (new ItalianFactory())->create('spaceship');
    }
}
