<?php

namespace DesignPatterns\Creational\SimpleFactory;

/**
 * class SimpleFactory.
 */
class SimpleFactory
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
        $this->typeList = array(
            'bicycle' => __NAMESPACE__.'\Bicycle',
            'other' => __NAMESPACE__.'\Scooter',
        );
    }

    /**
     * Creates a vehicle.
     *
     * @param string $type a known type key
     *
     * @throws \InvalidArgumentException
     *
     * @return VehicleInterface a new instance of VehicleInterface
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
