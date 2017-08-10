<?php

namespace DesignPatterns\Creational\FactoryMethod;

class ItalianFactory extends FactoryMethod
{
    /**
     * @param string $typeOfVehicle
     *
     * @return VehicleInterface
     */
    protected function createVehicle(string $typeOfVehicle): VehicleInterface
    {
        switch ($typeOfVehicle) {
            case parent::CHEAP:
                return new Bicycle();
            case parent::FAST:
                return new CarFerrari();
            default:
                throw new \InvalidArgumentException("$typeOfVehicle is not a valid vehicle");
        }
    }
}
