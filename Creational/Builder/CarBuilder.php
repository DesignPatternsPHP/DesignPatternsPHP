<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Door;
use DesignPatterns\Creational\Builder\Parts\Engine;
use DesignPatterns\Creational\Builder\Parts\Wheel;
use DesignPatterns\Creational\Builder\Parts\Car;
use DesignPatterns\Creational\Builder\Parts\Vehicle;

class CarBuilder implements Builder
{
    private Car $car;

    public function addDoors(): void
    {
        $this->car->setPart(new Door('rightDoor'));
        $this->car->setPart(new Door('leftDoor'));
        $this->car->setPart(new Door('trunkLid'));
    }

    public function addEngine(): void
    {
        $this->car->setPart(new Engine('engine'));
    }

    public function addWheel(): void
    {
        $this->car->setPart(new Wheel('wheelLF'));
        $this->car->setPart(new Wheel('wheelRF'));
        $this->car->setPart(new Wheel('wheelLR'));
        $this->car->setPart(new Wheel('wheelRR'));
    }

    public function createVehicle(): void
    {
        $this->car = new Car();
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}
