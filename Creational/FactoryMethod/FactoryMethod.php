<?php

namespace DesignPatterns\Creational\FactoryMethod;

abstract class FactoryMethod
{
    const CHEAP = 'cheap';
    const FAST = 'fast';

    /**
     * @param string $type
     *
     * @return VehicleInterface
     */
    abstract protected function createVehicle(string $type): VehicleInterface;

    /**
     * @param string $type
     *
     * @return VehicleInterface
     */
    public function create(string $type): VehicleInterface
    {
        $obj = $this->createVehicle($type);
        $obj->setColor('black');

        return $obj;
    }
}
