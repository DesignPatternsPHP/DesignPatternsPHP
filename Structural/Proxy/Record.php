<?php

namespace DesignPatterns\Structural\Proxy;

/**
 * class Record.
 */
class Record
{
    /**
     * @var string[]
     */
    private $data;

    /**
     * @param string[] $data
     */
    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    /**
     * magic setter
     *
     * @param string $name
     * @param mixed  $value
     *
     * @return void
     */
    public function __set(string $name, string $value)
    {
        $this->data[$name] = $value;
    }

    /**
     * magic getter
     *
     * @param string $name
     *
     * @return string|null
     */
    public function __get(string $name): string
    {
        if (isset($this->data[$name])) {
            return $this->data[$name];
        } else {
            return null;
        }
    }
}
