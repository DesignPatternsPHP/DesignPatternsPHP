<?php

namespace DesignPatterns\Structural\Bridge;

/**
 * Refined Abstraction.
 */
class Car extends Vehicle
{
    public function __construct(Workshop $workShop1, Workshop $workShop2)
    {
        parent::__construct($workShop1, $workShop2);
    }

    public function manufacture()
    {
        echo 'Car ';
        $this->workShop1->work();
        $this->workShop2->work();
    }
}
