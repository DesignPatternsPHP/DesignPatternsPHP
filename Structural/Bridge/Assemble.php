<?php

namespace DesignPatterns\Structural\Bridge;

class Assemble implements Workshop
{

    public function work()
    {
        print 'Assembled';
    }
}
