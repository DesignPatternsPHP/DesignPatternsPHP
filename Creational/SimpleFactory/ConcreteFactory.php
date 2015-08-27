<?php
declare(strict_types = 1);

namespace DesignPatterns\Creational\SimpleFactory;

/**
 * Class ConcreteFactory
 * @package DesignPatterns\Creational\SimpleFactory
 */
class ConcreteFactory
{
    /**
     * @var array
     */
    protected $typeList;

    /**
     * You can imagine to inject your own type list or merge with
     * the default ones...
     */
    public function __construct()
    {
        $this->typeList = [
            'bicycle' => __NAMESPACE__ . '\Bicycle',
            'other'   => __NAMESPACE__ . '\Scooter',
        ];
    }

    /**
     * Creates a vehicle
     *
     * @param string $type a known type key
     *
     * @return VehicleInterface a new instance of VehicleInterface
     * @throws \InvalidArgumentException
     */
    public function createVehicle(string $type) : VehicleInterface
    {
        if (!array_key_exists($type, $this->typeList)) {
            throw new \InvalidArgumentException($type . ' is not valid vehicle');
        }

        return new $this->typeList[ $type ]();
    }
}
