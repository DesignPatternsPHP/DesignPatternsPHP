<?php

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Vehicle;

class BikeBuilder implements BuilderInterface
{
    /**
     * @var Parts\Bike
     */
    private $bike;

    public function addDoors()
    {
    }

    public function addEngine()
    {
        $this->bike->setPart('engine', new Parts\Engine());
    }

    public function addWheel()
    {
        $this->bike->setPart('forwardWheel', new Parts\Wheel());
        $this->bike->setPart('rearWheel', new Parts\Wheel());
    }

    public function createVehicle()
    {
        $this->bike = new Parts\Bike();
    }

    public function getVehicle(): Vehicle
    {
        return $this->bike;
    }
}
