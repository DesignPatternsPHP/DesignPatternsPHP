<?php

namespace DesignPatterns;

/**
 * Multiton pattern
 *
 * --------------------------------------------------------------------------------------------------------------
 * THIS IS CONSIDERED TO BE AN ANTI-PATTERN! FOR BETTER TESTABILITY AND MAINTAINABILITY USE DEPENDENCY INJECTION!
 * -------------------------------------------------------------------------------------------------------------- 
 *
 * Purpose:
 * to have only a list of named instances that are used, like a singleton but with n instances
 *
 * Examples:
 * - 2 DB Connectors, e.g. one for MySQL, the other for SQLite
 * - multiple Loggers (one for debug messages, one for errors)
 *
 *
 */
class Multiton
{
    /**
     *
     * the first instance
     */
    const INSTANCE_1 = '1';

    /**
     *
     * the second instance
     */
    const INSTANCE_2 = '2';

    /**
     * holds the named instances
     *
     * @var array
     */
    private static $_instances = array();

    /**
     * should not be called from outside: private!
     *
     */
    private function __construct()
    {

    }

    /**
     * gets the instance with the given name, e.g. Multiton::INSTANCE_1
     * uses lazy initialization
     * 
     * @param string $instanceName
     * @return Multiton
     */
    public static function getInstance($instanceName)
    {
        if ( ! array_key_exists($instanceName, self::$_instances)) {
            self::$_instances[$instanceName] = new self();
        }

        return self::$_instances[$instanceName];
    }

    /**
     * prevent instance from being cloned
     *
     * @return void
     */
    private function __clone()
    {

    }

    /**
     * prevent instance from being unserialized
     *
     * @return void
     */
    private function __wakeup()
    {

    }
}
