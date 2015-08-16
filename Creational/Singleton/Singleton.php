<?php
declare(strict_types = 1);

namespace DesignPatterns\Creational\Singleton;

/**
 * Class Singleton
 * @package DesignPatterns\Creational\Singleton
 */
class Singleton
{
    /**
     * @var Singleton reference to singleton instance
     */
    private static $instance;

    /**
     * is not allowed to call from outside: private!
     */
    private function __construct()
    {
    }

    /**
     * gets the instance via lazy initialization (created on first usage)
     *
     * @return self
     */
    public static function getInstance() : Singleton
    {
        if (null === static::$instance) {
            static::$instance = new static;
        }

        return static::$instance;
    }

    /**
     * prevent the instance from being cloned
     */
    private function __clone()
    {
    }

    /**
     * prevent from being unserialized
     */
    private function __wakeup()
    {
    }
}
