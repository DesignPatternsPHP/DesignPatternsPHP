<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\NullObject;

class PrintLogger implements Logger
{
    public function log(string $str)
    {
        echo $str;
    }
}
