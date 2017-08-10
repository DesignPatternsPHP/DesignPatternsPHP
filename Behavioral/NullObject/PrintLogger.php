<?php

namespace DesignPatterns\Behavioral\NullObject;

class PrintLogger implements LoggerInterface
{
    /**
     * @param string $str
     */
    public function log(string $str)
    {
        echo $str;
    }
}
