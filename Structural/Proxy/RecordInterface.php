<?php

namespace DesignPatterns\Structural\Proxy;

interface RecordInterface
{
    /**
     * @param string $name
     * @param string $value
     */
    public function __set(string $name, string $value);

    /**
     * @param string $name
     * @return string
     */
    public function __get(string $name): string;
}
