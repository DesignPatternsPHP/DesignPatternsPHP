<?php

namespace DesignPatterns\Creational\FactoryMethod\Tests;

use DesignPatterns\Creational\FactoryMethod\Bicycle;
use DesignPatterns\Creational\FactoryMethod\CarFerrari;
use DesignPatterns\Creational\FactoryMethod\CarMercedes;
use DesignPatterns\Creational\FactoryMethod\FactoryMethod;
use DesignPatterns\Creational\FactoryMethod\GermanFactory;
use DesignPatterns\Creational\FactoryMethod\ItalianFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanCreateCheapVehicleInGermany()
    {
        $factory = new GermanFactory();
        $result = $factory->create(FactoryMethod::CHEAP);

        $this->assertInstanceOf(Bicycle::class, $result);
    }

    public function testCanCreateFastVehicleInGermany()
    {
        $factory = new GermanFactory();
        $result = $factory->create(FactoryMethod::FAST);

        $this->assertInstanceOf(CarMercedes::class, $result);
    }

    public function testCanCreateCheapVehicleInItaly()
    {
        $factory = new ItalianFactory();
        $result = $factory->create(FactoryMethod::CHEAP);

        $this->assertInstanceOf(Bicycle::class, $result);
    }

    public function testCanCreateFastVehicleInItaly()
    {
        $factory = new ItalianFactory();
        $result = $factory->create(FactoryMethod::FAST);

        $this->assertInstanceOf(CarFerrari::class, $result);
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
