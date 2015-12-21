<?php

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * Porsche is a german car.
 */
class Porsche implements VehicleInterface
{
    /**
     * @var string
     */
    protected $color;

    /**
     * @param string $rgb
     */
    public function setColor($rgb)
    {
        $this->color = $rgb;
    }

    /**
     * although tuning by AMG is only offered for Mercedes Cars,
     * this is a valid coding example ...
     */
    public function addTuningAMG()
    {
    }
}
