<?php
declare(strict_types = 1);

namespace DesignPatterns\Creational\Prototype;

/**
 * Class FooBookPrototype
 * @package DesignPatterns\Creational\Prototype
 */
class FooBookPrototype extends BookPrototype
{

    /** @var string */
    protected $category = 'Foo';

    /**
     * Do not allow clone
     */
    public function __clone()
    {
    }
}
