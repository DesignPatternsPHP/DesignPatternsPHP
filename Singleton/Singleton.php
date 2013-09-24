<?php

namespace DesignPatterns\Singleton;

/**
 * class Singleton
 */
class Singleton
{
    /**
     * @var cached reference to singleton instance 
     */
    protected static $instance;
    
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
