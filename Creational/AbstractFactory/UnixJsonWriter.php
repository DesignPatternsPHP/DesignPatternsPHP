<?php

namespace DesignPatterns\Creational\AbstractFactory;

class UnixJsonWriter implements JsonWriter
{
    public function write(array $data, bool $formatted): string
    {
        $options = null;

        if ($formatted) {
            $options = JSON_PRETTY_PRINT;
        }

        return json_encode($data, $options);
    }
}
