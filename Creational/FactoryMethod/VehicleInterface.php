<?php

namespace DesignPatterns\Creational\FactoryMethod;

interface VehicleInterface
{
    /**
     * @param string $rgb
     *
     * @return mixed
     */
    public function setColor(string $rgb);
}
