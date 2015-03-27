<?php

namespace DesignPatterns\Behavioral\NullObject;

/**
 * Performance concerns : ok there is a call for nothing but we spare an "if is_null"
 * I didn't run a benchmark but I think it's equivalent.
 *
 * Key feature : of course this logger MUST implement the same interface (or abstract)
 * like the other loggers.
 */
class NullLogger implements LoggerInterface
{
    /**
     * {@inheritdoc}
     */
    public function log($str)
    {
        // do nothing
    }
}
