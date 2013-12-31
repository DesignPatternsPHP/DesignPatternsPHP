<?php

namespace DesignPatterns\Mediator\Subsystem;

use DesignPatterns\Mediator\Colleague;

/**
 * Server serves responses
 */
class Server extends Colleague
{
    /**
     * process on server
     */
    public function process()
    {
        $data = $this->getMediator()->queryDb();
        $this->getMediator()->sendResponse("Hello $data");
    }
}
