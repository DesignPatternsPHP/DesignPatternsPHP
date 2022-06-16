<?php

namespace DesignPatterns\Creational\AbstractFactory;

class WinCsvWriter implements CsvWriter
{
    public function write(array $line): string
    {
        return implode(',', $line) . "\r\n";
    }
}
