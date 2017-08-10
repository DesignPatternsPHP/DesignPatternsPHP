<?php

namespace DesignPatterns\Creational\FactoryMethod;

class CarFerrari implements VehicleInterface
{
    /**
     * @var string
     */
    private $color;

    /**
     * @param string $rgb
     */
    public function setColor(string $rgb)
    {
        $this->color = $rgb;
    }
}
