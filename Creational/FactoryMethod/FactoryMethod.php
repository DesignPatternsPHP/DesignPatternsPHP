<?php
declare(strict_types = 1);

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * Class FactoryMethod
 * @package DesignPatterns\Creational\FactoryMethod
 */
abstract class FactoryMethod
{
    /** @var int */
    const CHEAP = 1;

    /** @var int */
    const FAST = 2;

    /**
     * Creates a new vehicle
     *
     * @param string $type
     *
     * @return VehicleInterface a new vehicle
     */
    public function create(string $type) : VehicleInterface
    {
        $obj = $this->createVehicle($type);
        $obj->setColor("#f00");

        return $obj;
    }

    /**
     * The children of the class must implement this method
     *
     * Sometimes this method can be public to get "raw" object
     *
     * @param string $type a generic type
     *
     * @return VehicleInterface a new vehicle
     */
    abstract protected function createVehicle(string $type) : VehicleInterface;
}
