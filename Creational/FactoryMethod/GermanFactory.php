<?php

namespace DesignPatterns\Creational\FactoryMethod;

class GermanFactory extends FactoryMethod
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
                $carMercedes = new CarMercedes();
                // we can specialize the way we want some concrete Vehicle since we know the class
                $carMercedes->addAMGTuning();

                return $carMercedes;
            default:
                throw new \InvalidArgumentException("$typeOfVehicle is not a valid vehicle");
        }
    }
}
