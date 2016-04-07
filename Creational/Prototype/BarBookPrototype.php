<?php

namespace DesignPatterns\Creational\Prototype;

/**
 * Class BarBookPrototype.
 */
class BarBookPrototype extends BookPrototype
{
    /**
     * @var string
     */
    protected $category = 'Bar';

    /**
     * empty clone.
     */
    public function __clone()
    {
    }
}
