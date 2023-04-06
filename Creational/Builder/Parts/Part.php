<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\Parts;

abstract class Part
{
    private String $name;

    public function __construct(String $name)
    {
        $this->$name = $name;
    }

}