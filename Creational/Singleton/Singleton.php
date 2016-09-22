<?php

namespace DesignPatterns\Creational\Singleton;

class Singleton
{
    /**
     * @var Singleton
     */
    private static $instance;

    /**
     * gets the instance via lazy initialization (created on first usage)
     */
    public static function getInstance(): Singleton
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * is not allowed to call from outside to prevent from creating multiple instances,
     * to use the singleton, you have to obtain the instance from Singleton::getInstance() instead
     */
    private function __construct()
    {
    }

    /**
     * prevent the instance from being cloned (which would create a second instance of it)
     *
     * @throws SingletonPatternViolationException
     */
    final public function __clone()
    {
        throw new \Exception('This is a Singleton. __clone is forbidden');
    }

    /**
     * prevent from being unserialized (which would create a second instance of it)
     *
     * @throws SingletonPatternViolationException
     */
    final public function __wakeup()
    {
        throw new \Exception('This is a Singleton. __wakeup is forbidden');
    }
}
