<?php

namespace DesignPatterns\Behavioral\Mediator\Subsystem;

use DesignPatterns\Behavioral\Mediator\Colleague;

/**
 * Server serves responses.
 */
class Server extends Colleague
{
    /**
     * process on server.
     */
    public function process()
    {
        $data = $this->getMediator()->queryDb();
        $this->getMediator()->sendResponse("Hello $data");
    }
}
