<?php

namespace DesignPatterns\Behavioral\NullObject;

class PrintLogger implements LoggerInterface
{
    /**
     * @param string $str
     *
     * @return mixed|void
     */
    public function log(string $str)
    {
        echo $str;
    }
}
