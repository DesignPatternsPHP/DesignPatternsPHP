<?php
declare(strict_types = 1);

namespace DesignPatterns\Creational\SimpleFactory;

/**
 * Interface VehicleInterface
 * @package DesignPatterns\Creational\SimpleFactory
 */
interface VehicleInterface
{
    /**
     * @param string $destination
     *
     * @return DestinationInterface
     */
    public function driveTo(string $destination) : DestinationInterface;
}
