<?php

namespace DesignPatterns\DependencyInjection;

/**
 * class AbstractConfig
 */
abstract class AbstractConfig implements Parameters
{
    /**
     * @var Storage of data
     */
    protected $storage;

    public function __construct($storage)
    {
        $this->storage = $storage;
    }
}
