<?php

namespace DesignPatterns\Creational\StaticFactory;

/**
 * Note1: Remember, static => global => evil
 * Note2: Cannot be subclassed or mock-upped or have multiple different instances.
 */
class StaticFactory
{
    /**
     * the parametrized function to get create an instance.
     *
     * @param string $type
     *
     * @static
     *
     * @throws \InvalidArgumentException
     *
     * @return FormatterInterface
     */
    public static function factory($type)
    {
        $className = __NAMESPACE__.'\Format'.ucfirst($type);

        if (!class_exists($className)) {
            throw new \InvalidArgumentException('Missing format class.');
        }

        return new $className();
    }
}
