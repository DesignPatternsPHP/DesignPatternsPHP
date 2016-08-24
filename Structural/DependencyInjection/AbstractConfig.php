<?php

namespace DesignPatterns\Structural\DependencyInjection;

/**
 * class AbstractConfig.
 */
abstract class AbstractConfig
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
