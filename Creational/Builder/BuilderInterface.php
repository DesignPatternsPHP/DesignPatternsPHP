<?php

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Vehicle;

interface BuilderInterface
{
    public function createVehicle();

    public function addWheel();

    public function addEngine();

    public function addDoors();

    /**
     * @return Vehicle
     */
    public function getVehicle(): Vehicle;
}
