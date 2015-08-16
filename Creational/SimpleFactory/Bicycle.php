<?php
declare(strict_types = 1);

namespace DesignPatterns\Creational\SimpleFactory;

/**
 * Class Bicycle
 * @package DesignPatterns\Creational\SimpleFactory
 */
class Bicycle implements VehicleInterface
{
    /**
     * @param string $destination
     *
     * @return DestinationInterface
     */
    public function driveTo(string $destination) : DestinationInterface
    {
    }
}
