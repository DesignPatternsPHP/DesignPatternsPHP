<?php
declare(strict_types = 1);

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * Bicycle is a bicycle
 */
class Bicycle implements VehicleInterface
{
    /**
     * @var string
     */
    protected $color;

    /**
     * sets the color of the bicycle
     *
     * @param string $rgb
     */
    public function setColor(string $rgb)
    {
        $this->color = $rgb;
    }
}
