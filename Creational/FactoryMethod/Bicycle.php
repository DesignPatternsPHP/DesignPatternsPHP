<?php

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * Bicycle is a bicycle.
 */
class Bicycle implements VehicleInterface
{
    /**
     * @var string
     */
    protected $color;

    /**
     * Sets the color of the bicycle.
     *
     * @param string $rgb
     */
    public function setColor($rgb)
    {
        $this->color = $rgb;
    }
}
