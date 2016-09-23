<?php

namespace DesignPatterns\Behavioral\Command\Tests;

use DesignPatterns\Behavioral\Command\AddMessageDateCommand;
use DesignPatterns\Behavioral\Command\HelloCommand;
use DesignPatterns\Behavioral\Command\Invoker;
use DesignPatterns\Behavioral\Command\Receiver;

class UndoableCommandTest extends \PHPUnit_Framework_TestCase
{
    public function testInvocation()
    {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();
        $this->assertEquals($receiver->getOutput(), 'Hello World');

        $messageDateCommand = new AddMessageDateCommand($receiver);
        $messageDateCommand->execute();

        $invoker->run();
        $this->assertEquals($receiver->getOutput(), "Hello World\nHello World [".date('Y-m-d').']');

        $messageDateCommand->undo();

        $invoker->run();
        $this->assertEquals($receiver->getOutput(), "Hello World\nHello World [".date('Y-m-d')."]\nHello World");
    }
}
