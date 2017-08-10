<?php

namespace DesignPatterns\Creational\StaticFactory;

/**
 * Note1: Remember, static means global state which is evil because it can't be mocked for tests
 * Note2: Cannot be subclassed or mock-upped or have multiple different instances.
 */
final class StaticFactory
{
    const NUMBER_TYPE = 'number';
    const STRING_TYPE = 'string';

    /**
     * @param string $type
     *
     * @return FormatterInterface
     */
    public static function factory(string $type): FormatterInterface
    {
        if (self::NUMBER_TYPE === $type) {
            return new FormatNumber();
        }

        if (self::STRING_TYPE === $type) {
            return new FormatString();
        }

        throw new \InvalidArgumentException('Unknown format given');
    }
}
