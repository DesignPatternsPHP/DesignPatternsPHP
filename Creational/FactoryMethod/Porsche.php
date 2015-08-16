<?php
declare(strict_types = 1);

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * Class Porsche
 * @package DesignPatterns\Creational\FactoryMethod
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
    public function setColor(string $rgb)
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
