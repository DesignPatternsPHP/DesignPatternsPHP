<?php

namespace DesignPatterns\Singleton;

/**
 * class Singleton
 */
class Singleton
{
    /**
     * gets the instance via lazy initialization (created on first usage)
     *
     * @return Singleton
     */
    public static function getInstance()
    {
        static $instance;

        if (null === $instance) {
            $instance = new self();
        }

        return $instance;
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
     *
     * @return void
     */
    private function __clone()
    {

    }

    /**
     * prevent from being unserialized
     *
     * @return void
     */
    private function __wakeup()
    {

    }
}
