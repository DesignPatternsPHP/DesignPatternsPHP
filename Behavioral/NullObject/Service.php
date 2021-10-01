<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\NullObject;

class Service
{
    public function __construct(private Logger $logger)
    {
    }

    /**
     * do something ...
     */
    public function doSomething()
    {
        // notice here that you don't have to check if the logger is set with eg. is_null(), instead just use it
        $this->logger->log('We are in ' . __METHOD__);
    }
}
