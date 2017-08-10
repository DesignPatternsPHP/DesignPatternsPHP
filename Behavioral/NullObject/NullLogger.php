<?php

namespace DesignPatterns\Behavioral\NullObject;

class NullLogger implements LoggerInterface
{
    /**
     * @param string $str
     */
    public function log(string $str)
    {
        // do nothing
    }
}
