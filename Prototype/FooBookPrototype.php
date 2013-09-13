<?php

namespace DesignPatterns\Prototype;

/**
 * Class FooBookPrototype
 */
class FooBookPrototype extends BookPrototype
{
    protected $category = 'Foo';

    /**
     * empty clone
     */
    public function __clone()
    {

    }
}
