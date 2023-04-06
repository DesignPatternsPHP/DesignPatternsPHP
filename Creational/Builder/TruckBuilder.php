<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Door;
use DesignPatterns\Creational\Builder\Parts\Engine;
use DesignPatterns\Creational\Builder\Parts\Wheel;
use DesignPatterns\Creational\Builder\Parts\Truck;
use DesignPatterns\Creational\Builder\Parts\Vehicle;

class TruckBuilder implements Builder
{
    private Truck $truck;

    public function addDoors(): void
    {
        $this->truck->setPart(new Door('rightDoor'));
        $this->truck->setPart(new Door('leftDoor'));
    }

    public function addEngine(): void
    {
        $this->truck->setPart(new Engine('truckEngine'));
    }

    public function addWheel(): void
    {
        $this->truck->setPart(new Wheel('wheel1'));
        $this->truck->setPart(new Wheel('wheel2'));
        $this->truck->setPart(new Wheel('wheel3'));
        $this->truck->setPart(new Wheel('wheel4'));
        $this->truck->setPart(new Wheel('wheel5'));
        $this->truck->setPart(new Wheel('wheel6'));
    }

    public function createVehicle(): void
    {
        $this->truck = new Truck();
    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}
