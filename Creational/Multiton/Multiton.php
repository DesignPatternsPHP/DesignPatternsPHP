<?php

namespace DesignPatterns\Creational\Multiton;

/**
 * class Multiton.
 */
class Multiton
{
    /**
     * the first instance.
     */
    const INSTANCE_1 = '1';

    /**
     * the second instance.
     */
    const INSTANCE_2 = '2';

    /**
     * holds the named instances.
     *
     * @var array
     */
    private static $instances = array();

    /**
     * should not be called from outside: private!
     */
    private function __construct()
    {
    }

    /**
     * gets the instance with the given name, e.g. Multiton::INSTANCE_1
     * uses lazy initialization.
     *
     * @param string $instanceName
     *
     * @return Multiton
     */
    public static function getInstance($instanceName)
    {
        if (!array_key_exists($instanceName, self::$instances)) {
            self::$instances[$instanceName] = new self();
        }

        return self::$instances[$instanceName];
    }

    /**
     * prevent instance from being cloned.
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * prevent instance from being unserialized.
     *
     * @return void
     */
    private function __wakeup()
    {
    }
}
