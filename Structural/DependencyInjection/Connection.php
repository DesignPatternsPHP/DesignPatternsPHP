<?php

namespace DesignPatterns\Structural\DependencyInjection;

/**
 * Class Connection.
 */
class Connection
{
    /**
     * @var Configuration
     */
    protected $configuration;

    /**
     * @var Currently connected host
     */
    protected $host;

    /**
     * @param Parameters $config
     */
    public function __construct(Parameters $config)
    {
        $this->configuration = $config;
    }

    /**
     * connection using the injected config.
     */
    public function connect()
    {
        $host = $this->configuration->get('host');
        // connection to host, authentication etc...

        //if connected
        $this->host = $host;
    }

    /*
     * Get currently connected host
     *
     * @return string
     */

    public function getHost()
    {
        return $this->host;
    }
}
