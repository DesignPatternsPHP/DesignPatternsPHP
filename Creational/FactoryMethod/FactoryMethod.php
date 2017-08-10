<?php

namespace DesignPatterns\Creational\FactoryMethod;

abstract class FactoryMethod
{
    const CHEAP = 'cheap';
    const FAST = 'fast';
    const COLOR = 'black';

    /**
     * @param string $typeOfVehicle
     *
     * @return VehicleInterface
     */
    abstract protected function createVehicle(string $typeOfVehicle): VehicleInterface;

    /**
     * @param string $typeOfVehicle
     *
     * @return VehicleInterface
     */
    public function create(string $typeOfVehicle): VehicleInterface
    {
        $obj = $this->createVehicle($typeOfVehicle);
        $obj->setColor(self::COLOR);

        return $obj;
    }
}
