<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\NullObject;

/**
 * Service is dummy service that uses a logger
 */
class Service
{

    protected $logger;

    // we inject the logger in ctor and it is mandatory
    public function __construct(LoggerInterface $log)
    {
        $this->logger = $log;
    }

    public function doSomething()
    {
        // no more check "if (!is_null($this->logger))..." with the NullObject pattern
        $this->logger->log('We are in ' . __METHOD__);
        // something to do...
    }

}