<?php
declare(strict_types = 1);

namespace DesignPatterns\Creational\SimpleFactory;

/**
 * Class Scooter
 * @package DesignPatterns\Creational\SimpleFactory
 */
class Scooter implements VehicleInterface
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
