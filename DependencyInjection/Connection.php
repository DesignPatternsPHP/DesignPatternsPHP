<?php

namespace DesignPatterns\DependencyInjection;

/**
 * Class Connection
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
     * Connection using the injected config
     */
    public function connect()
    {
        $host = $this->configuration->get('host');
        
        // Connection to host, authentication etc...

        // If connected
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
