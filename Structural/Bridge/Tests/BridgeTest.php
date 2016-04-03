<?php

namespace DesignPatterns\Structural\Bridge\Tests;

use DesignPatterns\Structural\Bridge\Assemble;
use DesignPatterns\Structural\Bridge\Car;
use DesignPatterns\Structural\Bridge\Motorcycle;
use DesignPatterns\Structural\Bridge\Produce;

class BridgeTest extends \PHPUnit_Framework_TestCase
{
    public function testCar()
    {
        $vehicle = new Car(new Produce(), new Assemble());
        $this->expectOutputString('Car Produced Assembled');
        $vehicle->manufacture();
    }

    public function testMotorcycle()
    {
        $vehicle = new Motorcycle(new Produce(), new Assemble());
        $this->expectOutputString('Motorcycle Produced Assembled');
        $vehicle->manufacture();
    }
}
