<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Pool;

use DateTime;

class StringReverseWorker
{
    public function __construct()
    {
    }

    public function run(string $text): string
    {
        return strrev($text);
    }
}
