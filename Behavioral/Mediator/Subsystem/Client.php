<?php

namespace DesignPatterns\Behavioral\Mediator\Subsystem;

use DesignPatterns\Behavioral\Mediator\Colleague;

/**
 * Client is a client that make request et get response.
 */
class Client extends Colleague
{
    /**
     * request.
     */
    public function request()
    {
        $this->getMediator()->makeRequest();
    }

    /**
     * output content.
     *
     * @param string $content
     */
    public function output($content)
    {
        echo $content;
    }
}
