<?php

/*
 * DesignPatternPHP
 */

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
        $this->client->request();
    }

}