<?php

namespace DesignPatterns\Structural\Proxy;

/**
 * @property string username
 */
class Record implements RecordInterface
{
    /**
     * @var string[]
     */
    private $data;

    protected function __construct()
    {
    }

    public function __set(string $name, string $value)
    {
        $this->data[$name] = $value;
    }

    public function __get(string $name): string
    {
        if (!isset($this->data[$name])) {
            throw new \OutOfRangeException('Invalid name given');
        }

        return $this->data[$name];
    }
}
