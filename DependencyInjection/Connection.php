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
     * Here, Configuration gets injected and Connection will get all that it needs from Configuration
     * Without DI, the configuration would be created directly in Connection, which is not very good
     * for testing and extending Connection
     *
     * Notice we are following Inversion of control principle here by asking Config to implement
     * Parameters interface. This decouples our components. We don't care where the sorce of information,
     * we only care that config has certain methods to retrieve that information. Read more about Inversion
     * of control <http://en.wikipedia.org/wiki/Inversion_of_control>
     *
     * @param Parameters $config
     */
    public function __construct(Parameters $config)
    {
        $this->configuration = $config;
    }

    /**
     * connection using the injected config
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
