<?php
declare(strict_types = 1);

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * Interface VehicleInterface
 * @package DesignPatterns\Creational\FactoryMethod
 */
interface VehicleInterface
{
    /**
     * sets the color of the vehicle
     *
     * @param string $rgb
     */
    public function setColor(string $rgb);
}
