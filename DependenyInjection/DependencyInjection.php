<?php

namespace DesignPatterns;

/**
 * Dependency Injection
 *
 * Purpose:
 * to implement a loosely coupled architecture in order to get better testable, maintainable and extandable code
 * 
 * Examples:
 * - the Doctrine2 ORM uses dependency injection e.g. for Configuration that is injected into a Connection object. for
 *   testing purposes, one can easily create a mock object of the configuration and inject that into the connection
 *   object
 * - Symfony and Zend Framework 2 already have containers for DI that create objects via a configuration array and
 *   inject them where needed
 *
 */
class Configuration
{
    protected $_host;

    /**
     * @param string $host
     * @return Configuration
     */
    public function setHost($host)
    {
        $this->_host = $host;
        return $this; // for a fluent interface
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->_host;
    }
}

class Connection
{
    protected $_configuration;

    /**
     * here, Configuration gets injected and Connection will get all that it needs from Configuration
     * without DI, the configuration would be created directly in Connection, which is not very good
     * for testing and extending Connection
     *
     * @param Configuration $config
     */
    public function __construct(Configuration $config)
    {
        $this->_configuration = $config;
    }

    public function connect()
    {
        $host = $this->_configuration->getHost();
        // ...
    }
}