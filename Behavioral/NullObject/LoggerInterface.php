<?php

namespace DesignPatterns\Behavioral\NullObject;

/**
 * Key feature: NullLogger must inherit from this interface like any other loggers
 */
interface LoggerInterface
{
    /**
     * @param string $str
     *
     * @return mixed
     */
    public function log(string $str);
}
