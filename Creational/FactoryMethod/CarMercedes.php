<?php

namespace DesignPatterns\Creational\FactoryMethod;

class CarMercedes implements VehicleInterface
{
    /**
     * @var string
     */
    private $color;

    public function setColor(string $rgb)
    {
        $this->color = $rgb;
    }

    public function addAMGTuning()
    {
        // do additional tuning here
    }
}
