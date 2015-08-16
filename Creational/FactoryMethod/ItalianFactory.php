<?php
declare(strict_types = 1);

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * Class ItalianFactory
 * @package DesignPatterns\Creational\FactoryMethod
 */
class ItalianFactory extends FactoryMethod
{
    /**
     * {@inheritdoc}
     */
    protected function createVehicle(int $type) : VehicleInterface
    {
        switch ($type) {
            case parent::CHEAP:
                return new Bicycle();
                break;
            case parent::FAST:
                return new Ferrari();
                break;
            default:
                throw new \InvalidArgumentException(
                    'Not a valid vehicle, vehicles allowed: ' .
                    implode(', ', FactoryMethod::$typeTexts)
                );
        }
    }
}
