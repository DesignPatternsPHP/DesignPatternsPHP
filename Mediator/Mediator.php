<?php

namespace DesignPatterns\Mediator;

use DesignPatterns\Mediator\Subsystem;

/**
 * Mediator is the concrete Mediator for this design pattern.
 *
 * In this example, I have made a "Hello World" with the Mediator Pattern.
 */
class Mediator implements MediatorInterface
{

    // you could have an array
    protected $server;
    protected $database;
    protected $client;

    /**
     * @param Subsystem\Database $db
     * @param Subsystem\Client   $cl
     * @param Subsystem\Server   $srv
     */
    public function setColleague(Subsystem\Database $db, Subsystem\Client $cl, Subsystem\Server $srv)
    {
        $this->database = $db;
        $this->server = $srv;
        $this->client = $cl;
    }

    /**
     * make request
     */
    public function makeRequest()
    {
        $this->server->process();
    }

    /**
     * query db
     *
     * @return mixed
     */
    public function queryDb()
    {
        return $this->database->getData();
    }

    /**
     * send response
     *
     * @param string $content
     */
    public function sendResponse($content)
    {
        $this->client->output($content);
    }
}
