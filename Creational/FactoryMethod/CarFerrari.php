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
     *
     * @return mixed|void
     */
    public function setColor(string $rgb)
    {
        $this->color = $rgb;
    }
}
