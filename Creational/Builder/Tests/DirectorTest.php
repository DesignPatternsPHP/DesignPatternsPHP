<?php

namespace DesignPatterns\Creational\Builder\Tests;

use DesignPatterns\Creational\Builder\BikeBuilder;
use DesignPatterns\Creational\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Director;

class DirectorTest extends \PHPUnit_Framework_TestCase
{
    public function testCanBuildBike()
    {
        $bikeBuilder = new BikeBuilder();
        $newVehicle = (new Director())->build($bikeBuilder);

        $this->assertInstanceOf('DesignPatterns\Creational\Builder\Parts\Bike', $newVehicle);
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);

        $this->assertInstanceOf('DesignPatterns\Creational\Builder\Parts\Car', $newVehicle);
    }
}
