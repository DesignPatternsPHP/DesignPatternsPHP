<?php

namespace DesignPatterns\DependencyInjection;

/**
 * class AbstractConfig
 */
abstract class AbstractConfig
{
    /**
     * @var Storage of data
     */
    protected $storage;

    public function __construct(StorageInterface $storage)
    {
        $this->storage = $storage;
    }
}
