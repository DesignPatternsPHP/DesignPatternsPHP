<?php

namespace DesignPatterns\StaticFactory;

/**
 * Static Factory pattern
 *
 * Purpose:
 * similar to the AbstractFactory, this pattern is used to create series of related or dependant objects.
 * The difference between this and the abstract factory pattern is that the static factory pattern uses just one static
 * method to create all types of objects it can create. It is usually named "factory" or "build".
 *
 * Examples:
 * - Zend Framework: Zend_Cache_Backend or _Frontend use a factory method create cache backends or frontends
 * 
 * Note1: Remember, static => global => evil
 * Note2: Cannot be subclassed or mock-upped or have multiple different instances
 */
class StaticFactory
{
    /**
     * the parametrized function to get create an instance
     *
     * @param string $type
     *
     * @static
     *
     * @throws \InvalidArgumentException
     * @return FormatterInterface
     */
    public static function factory($type)
    {
        $className = __NAMESPACE__ . '\Format' . ucfirst($type);

        if (!class_exists($className)) {
            throw new \InvalidArgumentException('Missing format class.');
        }

        return new $className();
    }
}
