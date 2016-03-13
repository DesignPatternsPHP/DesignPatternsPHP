<?php

namespace DesignPatterns\Behavioral\Command\Tests;

use DesignPatterns\Behavioral\Command\AddMessageDateCommand;
use DesignPatterns\Behavioral\Command\HelloCommand;
use DesignPatterns\Behavioral\Command\Invoker;
use DesignPatterns\Behavioral\Command\Receiver;
use PHPUnit_Framework_TestCase;

/**
 * UndoableCommandTest has the role of the Client in the Command Pattern.
 */
class UndoableCommandTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Invoker
     */
    protected $invoker;

    /**
     * @var Receiver
     */
    protected $receiver;

    protected function setUp()
    {
        $this->invoker = new Invoker();
        $this->receiver = new Receiver();
    }

    public function testInvocation()
    {
        $this->invoker->setCommand(new HelloCommand($this->receiver));
        $this->invoker->run();
        $this->assertEquals($this->receiver->getOutput(), 'Hello World');

        $messageDateCommand = new AddMessageDateCommand($this->receiver);
        $messageDateCommand->execute();

        $this->invoker->run();
        $this->assertEquals($this->receiver->getOutput(), "Hello World\nHello World [".date('Y-m-d').']');

        $messageDateCommand->undo();

        $this->invoker->run();
        $this->assertEquals($this->receiver->getOutput(), "Hello World\nHello World [".date('Y-m-d')."]\nHello World");
    }
}
