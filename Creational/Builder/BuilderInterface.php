<?php

namespace DesignPatterns\Creational\Builder;

interface BuilderInterface
{
    /**
     * @return mixed
     */
    public function createVehicle();

    /**
     * @return mixed
     */
    public function addWheel();

    /**
     * @return mixed
     */
    public function getVehicle();
}
