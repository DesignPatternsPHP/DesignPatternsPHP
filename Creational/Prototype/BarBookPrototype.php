<?php
declare(strict_types = 1);

namespace DesignPatterns\Creational\Prototype;

/**
 * Class BarBookPrototype
 * @package DesignPatterns\Creational\Prototype
 */
class BarBookPrototype extends BookPrototype
{
    /**
     * @var string
     */
    protected $category = 'Bar';

    /**
     * Do not allow clone
     */
    public function __clone()
    {
    }
}
