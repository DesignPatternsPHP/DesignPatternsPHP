<?php

namespace DesignPatterns\Behavioral\NullObject;

/**
 * Service is dummy service that uses a logger.
 */
class Service
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * we inject the logger in ctor and it is mandatory.
     *
     * @param LoggerInterface $log
     */
    public function __construct(LoggerInterface $log)
    {
        $this->logger = $log;
    }

    /**
     * do something ...
     */
    public function doSomething()
    {
        // no more check "if (!is_null($this->logger))..." with the NullObject pattern
        $this->logger->log('We are in '.__METHOD__);
        // something to do...
    }
}
