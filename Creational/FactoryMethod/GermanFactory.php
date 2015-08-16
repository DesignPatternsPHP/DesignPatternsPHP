<?php
declare(strict_types = 1);

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * Class GermanFactory
 * @package DesignPatterns\Creational\FactoryMethod
 */
class GermanFactory extends FactoryMethod
{
    /**
     * {@inheritdoc}
     */
    protected function createVehicle(string $type) : VehicleInterface
    {
        switch ($type) {
            case parent::CHEAP:
                return new Bicycle();
                break;
            case parent::FAST:
                $obj = new Porsche();
                // we can specialize the way we want some concrete Vehicle since
                // we know the class
                $obj->addTuningAMG();

                return $obj;
                break;
            default:
                throw new \InvalidArgumentException($type . ' is not a valid vehicle');
        }
    }
}
