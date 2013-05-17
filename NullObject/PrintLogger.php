<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\NullObject;

/**
 * PrintLogger is a logger that prints the log entry to standard output
 */
class PrintLogger implements LoggerInterface
{

    public function log($str)
    {
        echo $str;
    }

}