<?php

namespace DesignPatterns\Tests\Command;

use DesignPatterns\Command\Invoker;
use DesignPatterns\Command\Receiver;
use DesignPatterns\Command\HelloCommand;

/**
 * CommandTest has the role of the Client in the Command Pattern
 */
class CommandTest extends \PHPUnit_Framework_TestCase
{

    protected $invoker;
    protected $receiver;

    protected function setUp()
    {
        // this is the context of the application
        $this->invoker = new Invoker();
        $this->receiver = new Receiver();
    }

    public function testInvocation()
    {
        $this->invoker->setCommand(new HelloCommand($this->receiver));
        $this->expectOutputString('Hello World');
        $this->invoker->run();
    }
}
