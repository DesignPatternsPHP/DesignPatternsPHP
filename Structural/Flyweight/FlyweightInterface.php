<?php

namespace DesignPatterns\Structural\Flyweight;

interface FlyweightInterface
{
    /**
     * @param string $extrinsicState
     *
     * @return string
     */
    public function render(string $extrinsicState): string;
}
