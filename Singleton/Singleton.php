<?php

namespace DesignPatterns;

/**
 * Singleton pattern
 *
 * Purpose:
 * to have only one instance of this object in the application that will handle all calls
 *
 * Examples:
 * - DB Connector
 * - Logger (may also be a Multiton if there are many log files for several purposes)
 * - Lock file for the application (there is only one in the filesystem ...)
 *
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
     * @return Singleton
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
    {}

    /**
     * prevent the instance from being cloned
     *
     * @return void
     */
    private function __clone()
    {}

    /**
     * prevent from being unserialized
     *
     * @return void
     */
    private function __wakeup()
    {}
}
