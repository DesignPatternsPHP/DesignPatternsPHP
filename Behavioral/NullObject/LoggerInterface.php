<?php

namespace DesignPatterns\Behavioral\NullObject;

/**
 * LoggerInterface is a contract for logging something.
 *
 * Key feature: NullLogger MUST inherit from this interface like any other Loggers
 */
interface LoggerInterface
{
    /**
     * @param string $str
     *
     * @return mixed
     */
    public function log($str);
}
