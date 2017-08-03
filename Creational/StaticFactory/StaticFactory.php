<?php

namespace DesignPatterns\Creational\StaticFactory;

/**
 * Note1: Remember, static means global state which is evil because it can't be mocked for tests
 * Note2: Cannot be subclassed or mock-upped or have multiple different instances.
 */
final class StaticFactory
{
    /**
     * @param string $type
     *
     * @return FormatterInterface
     */
    public static function factory(string $type): FormatterInterface
    {
        if ($type == 'number') {
            return new FormatNumber();
        }

        if ($type == 'string') {
            return new FormatString();
        }

        throw new \InvalidArgumentException('Unknown format given');
    }
}
