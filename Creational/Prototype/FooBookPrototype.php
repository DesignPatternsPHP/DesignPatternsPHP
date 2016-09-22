<?php

namespace DesignPatterns\Creational\Prototype;

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
