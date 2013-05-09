<?php

namespace DesignPatterns;

/**
 * Factory Method pattern
 *
 * Purpose:
 * similar to the AbstractFactory, this pattern is used to create series of related or dependant objects.
 * The difference between this and the abstract factory pattern is that the factory method pattern uses just one static
 * method to create all types of objects it can create. It is usually named "factory" or "build".
 *
 * Examples:
 * - Zend Framework: Zend_Cache_Backend or _Frontend use a factory method create cache backends or frontends
 * 
 */
class FactoryMethod
{
    /**
     * the parametrized function to get create an instance
     *
     * @static
     * @return Formatter
     */
    public static function factory($type)
    {
        $className = 'Format' . ucfirst($type);
        if ( ! class_exists($className)) {
            throw new Exception('Missing format class.');
        }

        return new $className();
    }
}

interface Formatter
{

}

class FormatString implements Formatter
{

}

class FormatNumber implements Formatter
{
    
}
