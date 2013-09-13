<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\SimpleFactory;

/**
 * ConcreteFactory is a simple factory pattern.
 * 
 * It differs from the static factory because it is NOT static and as you
 * know : static => global => evil
 * 
 * Therefore, you can haZ multiple factories, differently parametrized, 
 * you can subclass it and you can mock-up it.
 */
class ConcreteFactory
{

    protected $typeList;

    /**
     * You can imagine to inject your own type list or merge with
     * the default ones...
     */
    public function __construct()
    {
        $this->typeList = array(
            'bicycle' => __NAMESPACE__ . '\Bicycle',
            'other' => __NAMESPACE__ . '\Scooter'
        );
    }

    /**
     * Creates a vehicle
     * 
     * @param string $type a known type key
     * @return VehicleInterface a new instance of VehicleInterface
     * @throws \InvalidArgumentException
     */
    public function createVehicle($type)
    {
        if (!array_key_exists($type, $this->typeList)) {
            throw new \InvalidArgumentException("$type is not valid vehicle");
        }
        $className = $this->typeList[$type];

        return new $className();
    }

}