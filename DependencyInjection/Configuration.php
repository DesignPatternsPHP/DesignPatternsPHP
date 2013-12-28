<?php

namespace DesignPatterns\DependencyInjection;

/**
 * class Configuration
 */
class Configuration
{
    /**
     * @var string
     */
    protected $host;

    /**
     * @param string $host
     *
     * @return Configuration
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this; // for a fluent interface
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }
}
