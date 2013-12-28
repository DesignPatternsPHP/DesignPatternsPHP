<?php

namespace DesignPatterns\Tests\Mediator;

use DesignPatterns\Mediator\Mediator;
use DesignPatterns\Mediator\Subsystem\Database;
use DesignPatterns\Mediator\Subsystem\Client;
use DesignPatterns\Mediator\Subsystem\Server;

/**
 * MediatorTest tests hello world
 */
class MediatorTest extends \PHPUnit_Framework_TestCase
{

    protected $client;

    protected function setUp()
    {
        $media = new Mediator();
        $this->client = new Client($media);
        $media->setColleague(new Database($media), $this->client, new Server($media));
    }

    public function testOutputHelloWorld()
    {
        // testing if Hello World is output :
        $this->expectOutputString('Hello World');
        // as you see, the 3 components Client, Server and Database are totally decoupled
        $this->client->request();
        // Anyway, it remains complexity in the Mediator that's why the pattern
        // Observer is preferable in mnay situations.
    }
}
