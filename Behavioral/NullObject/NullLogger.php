<?php

namespace DesignPatterns\Behavioral\NullObject;

class NullLogger implements LoggerInterface
{
    /**
     * @param string $str
     *
     * @return mixed|void
     */
    public function log(string $str)
    {
        // do nothing
    }
}
