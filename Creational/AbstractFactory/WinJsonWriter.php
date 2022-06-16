<?php declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory;

class WinJsonWriter implements JsonWriter
{
    public function write(array $data, bool $formatted): string
    {


        return json_encode($data, JSON_PRETTY_PRINT);
    }
}
