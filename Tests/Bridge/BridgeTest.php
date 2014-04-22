<?php

namespace DesignPatterns\Tests\Bridge;

use DesignPatterns\Bridge\Assemble;
use DesignPatterns\Bridge\Car;
use DesignPatterns\Bridge\Motorcycle;
use DesignPatterns\Bridge\Produce;
use DesignPatterns\Bridge\Vehicle;
use DesignPatterns\Bridge\Workshop;

class BridgeTest extends \PHPUnit_Framework_TestCase {

  public function testCar() {
    $vehicle = new Car(new Produce(), new Assemble());
    $this->expectOutputString('Car Produced Assembled');
    $vehicle->manufacture();
  }

  public function testMotorcycle() {
    $vehicle = new Motorcycle(new Produce(), new Assemble());
    $this->expectOutputString('Motorcycle Produced Assembled');
    $vehicle->manufacture();
  }

}
