<?php

namespace DesignPatterns\Behavioral\Command\Tv;

use DesignPatterns\Behavioral\Command\CommandInterface;
use DesignPatterns\Behavioral\Command\Tv\Receiver as TvReceiver;

class CommandChangeChannel implements CommandInterface
{
    protected $channelId;

    protected $output;

    public function __construct(TvReceiver $console, $channelId = 0)
    {
        $this->output = $console;
        $this->channelId = $channelId;
    }

    public function execute()
    {
        $this->output->changeChannel($this->channelId);
    }
}