<?php

namespace DesignPatterns\Behavioral\Command\Tests;

use DesignPatterns\Behavioral\Command\Invoker;
use DesignPatterns\Behavioral\Command\Receiver;
use DesignPatterns\Behavioral\Command\HelloCommand;
use DesignPatterns\Behavioral\Command\Tv\CommandOn;
use DesignPatterns\Behavioral\Command\Tv\CommandOff;
use DesignPatterns\Behavioral\Command\Tv\CommandChangeChannel;
use DesignPatterns\Behavioral\Command\Tv\Receiver as TvReceiver;

/**
 * CommandTest has the role of the Client in the Command Pattern
 */
class CommandTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Invoker
     */
    protected $invoker;

    /**
     * @var Receiver
     */
    protected $receiver;

    protected $tvReceiver;

    protected function setUp()
    {
        $this->invoker = new Invoker();
        $this->receiver = new Receiver();
        $this->tvReceiver = new TvReceiver();
    }

    public function testInvocation()
    {
        $this->invoker->setCommand(new HelloCommand($this->receiver));
        $this->expectOutputString('Hello World');
        $this->invoker->run();
    }

    public function testInvocationTvCommandOn()
    {
        $this->invoker->setCommand(new CommandOn($this->tvReceiver));
        $this->expectOutputString('The televisino is on.');
        $this->invoker->run();
    }

    public function testInvocationTvCommandOff()
    {
        $this->invoker->setCommand(new CommandOff($this->tvReceiver));
        $this->expectOutputString('The televisino is off.');
        $this->invoker->run();
    }

    public function testInvocationTvCommandChangeChannel()
    {
        $channelId = 10;
        $this->invoker->setCommand(new CommandChangeChannel($this->tvReceiver, $channelId));
        $this->expectOutputString('Now TV channel is ' . $channelId);
        $this->invoker->run();
    }
}
