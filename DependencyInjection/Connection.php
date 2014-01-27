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
     * here, Configuration gets injected and Connection will get all that it needs from Configuration
     * without DI, the configuration would be created directly in Connection, which is not very good
     * for testing and extending Connection
     *
     * @param Configuration $config
     */
    public function __construct(Configuration $config)
    {
        $this->configuration = $config;
    }

    /**
     * connection using the injected config
     */
    public function connect()
    {
        $host = $this->configuration->getHost();
        // ...
    }
}
