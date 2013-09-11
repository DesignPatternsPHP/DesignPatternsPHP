<?php

namespace DesignPatterns\FactoryMethod;

/**
 * Bicycle is a bicycle
 */
class Bicycle implements Vehicle
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
    public function setColor($rgb)
    {
        $this->color = $rgb;
    }
}
