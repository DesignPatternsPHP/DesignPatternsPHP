<?php

namespace DesignPatterns\Structural\Bridge;

/**
 * Concrete Implementation.
 */
class Produce implements Workshop
{
    public function work()
    {
        echo 'Produced ';
    }
}
