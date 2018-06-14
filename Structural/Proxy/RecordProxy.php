<?php

namespace DesignPatterns\Structural\Proxy;

class RecordProxy extends Record implements RecordInterface
{
    /**
     * @var RecordInterface
     */
    private $record;

    public function __construct()
    {
    }

    /**
     * @param string $name
     * @param string $value
     */
    public function __set(string $name, string $value)
    {
        if ($this->record == null) {
            $this->record = new Record;
        }

        $this->record->__set($name, $value);
    }

    public function __get(string $name): string
    {
        if ($this->record == null) {
            throw new \Exception('Invalid record! Not Initialized.');
        }

        return $this->record->__get($name);
    }
}
