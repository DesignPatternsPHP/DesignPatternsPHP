<?php

namespace DesignPatterns\FactoryMethod;

/**
 * Vehicle is a contract for a vehicle
 */
interface Vehicle
{
    /**
     * sets the color of the vehicle
     *
     * @param string $rgb
     */
    function setColor($rgb);
}
