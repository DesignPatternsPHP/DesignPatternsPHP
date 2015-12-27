<?php

namespace DesignPatterns\Creational\Singleton;

/**
 * class Singleton.
 */
class Singleton
{
    /**
     * @var Singleton reference to singleton instance
     */
    private static $instance;

    /**
     * gets the instance via lazy initialization (created on first usage).
     *
     * @return self
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * is not allowed to call from outside: private!
     */
    private function __construct()
    {
    }

    /**
     * prevent the instance from being cloned.
     *
     * @throws SingletonPatternViolationException
     *
     * @return void
     */
    final public function __clone()
    {
        throw new SingletonPatternViolationException('This is a Singleton. Clone is forbidden');
    }

    /**
     * prevent from being unserialized.
     *
     * @throws SingletonPatternViolationException
     *
     * @return void
     */
    final public function __wakeup()
    {
        throw new SingletonPatternViolationException('This is a Singleton. __wakeup usage is forbidden');
    }
}
