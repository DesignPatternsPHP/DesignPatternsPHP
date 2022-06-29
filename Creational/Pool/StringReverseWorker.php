<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Pool;

class StringReverseWorker
{
    public function run(string $text): string
    {
        return strrev($text);
    }
}
