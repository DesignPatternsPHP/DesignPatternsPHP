<?php

namespace DesignPatterns\Creational\FactoryMethod;

class ItalianFactory extends FactoryMethod
{
    /**
     * @param string $type
     *
     * @return VehicleInterface
     */
    protected function createVehicle(string $type): VehicleInterface
    {
        switch ($type) {
            case parent::CHEAP:
                return new Bicycle();
            case parent::FAST:
                return new CarFerrari();
            default:
                throw new \InvalidArgumentException("$type is not a valid vehicle");
        }
    }
}
