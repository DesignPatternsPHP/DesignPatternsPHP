<?php

namespace DesignPatterns\Creational\Singleton;

use DesignPatterns\Creational\Singleton\SingletonPatternViolationException;

/**
 * class Singleton
 */
class Singleton
{
    /**
     * @var Singleton reference to singleton instance
     */
    private static $instance;
    
    /**
     * gets the instance via lazy initialization (created on first usage)
     *
     * @return self
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static;
        }

        return static::$instance;
    }

    /**
     * is not allowed to call from outside: private!
     *
     */
    private function __construct()
    {
    }

    /**
     * prevent the instance from being cloned
     * @throws SingletonPatternViolationException
     * @return void
     */
    public final function __clone()
    {
        throw new SingletonPatternViolationException('This is a Singleton. Clone is forbidden');
    }

    /**
     * prevent from being unserialized
     * @throws SingletonPatternViolationException
     * @return void
     */
    public final function __wakeup()
    {
        throw new SingletonPatternViolationException('This is a Singleton. __wakeup usage is forbidden');
    }
}
