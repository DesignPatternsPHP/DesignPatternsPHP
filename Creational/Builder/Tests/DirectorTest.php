<?php

namespace DesignPatterns\Creational\Builder\Tests;

use DesignPatterns\Creational\Builder\TruckBuilder;
use DesignPatterns\Creational\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Director;

class DirectorTest extends \PHPUnit_Framework_TestCase
{
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        $this->assertInstanceOf('DesignPatterns\Creational\Builder\Parts\Truck', $newVehicle);
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);

        $this->assertInstanceOf('DesignPatterns\Creational\Builder\Parts\Car', $newVehicle);
    }
}
