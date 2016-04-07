<?php

namespace DesignPatterns\Creational\Prototype;

/**
 * Class FooBookPrototype.
 */
class FooBookPrototype extends BookPrototype
{
    protected $category = 'Foo';

    /**
     * empty clone.
     */
    public function __clone()
    {
    }
}
