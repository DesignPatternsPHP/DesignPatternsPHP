<?php

namespace DesignPatterns\Command;

/**
 * Receiver is specific service with its own contract and can be only concrete
 */
class Receiver
{
    /**
     * @param string $str
     */
    public function write($str)
    {
        echo $str;
    }
}
