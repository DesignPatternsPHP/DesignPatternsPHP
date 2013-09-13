<?php

namespace DesignPatterns;

/**
 * Registry pattern
 *
 * Purpose:
 * to implement a central storage for objects often used throughout the application, is typically implemented using
 * an abstract class with only static methods (or using the Singleton pattern)
 *
 * Example:
 * - Zend Framework: Zend_Registry holds the application's logger object, front controller etc.
 * - Yii Framework: CWebApplication holds all the application components, such as CWebUser, CUrlManager, etc.
 *
 */
abstract class Registry
{
    const LOGGER = 'logger';

    /**
     * @var array
     */
    protected static $storedValues = array();

    /**
     * sets a value
     *
     * @param string $key
     * @param mixed  $value
     *
     * @static
     * @return void
     */
    public static function set($key, $value)
    {
        self::$storedValues[$key] = $value;
    }

    /**
     * gets a value from the registry
     *
     * @param string $key
     *
     * @static
     * @return mixed
     */
    public static function get($key)
    {
        return self::$storedValues[$key];
    }

    // typically there would be methods to check if a key has already been registered and so on ...
}

// while bootstrapping the application
Registry::set(Registry::LOGGER, new \StdClass());

// throughout the application
Registry::get(Registry::LOGGER)->log('foo');
