<?php

namespace DesignPatterns\Structural\Flyweight;

interface FlyweightInterface
{
    public function render(string $extrinsicState): string;
}
