<?php

namespace DesignPatterns\Behavioral\NullObject;

/**
 * PrintLogger is a logger that prints the log entry to standard output.
 */
class PrintLogger implements LoggerInterface
{
    /**
     * @param string $str
     */
    public function log($str)
    {
        echo $str;
    }
}
