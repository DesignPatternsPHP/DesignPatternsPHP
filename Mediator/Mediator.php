<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\Mediator;

use DesignPatterns\Mediator\Subsystem;

/**
 * Mediator is the concrete Mediator for this design pattern.
 * 
 * This pattern provides an easy to decouple many components working together.
 * It is a good alternative over Observer IF you have a "central intelligence",
 * like a controller (but not in the sense of the MVC).
 * 
 * All components (called Colleague) are only coupled to the MediatorInterface and
 * it is a good thing because in OOP, one good friend is better than many. This
 * is the key-feature of this pattern.
 * 
 * In this example, I have made a "Hello World" with the Mediator Pattern, have fun (^_^)
 */
class Mediator implements MediatorInterface
{

    // you could have an array
    protected $server;
    protected $database;
    protected $client;

    public function setColleague(Subsystem\Database $db, Subsystem\Client $cl, Subsystem\Server $srv)
    {
        $this->database = $db;
        $this->server = $srv;
        $this->client = $cl;
    }

    public function makeRequest()
    {
        $this->server->process();
    }

    public function queryDb()
    {
        return $this->database->getData();
    }

    public function sendResponse($content)
    {
        $this->client->output($content);
    }

}