<?php

namespace DesignPatterns\Behavioral\Command\Tv;

use DesignPatterns\Behavioral\Command\CommandInterface;
use DesignPatterns\Behavioral\Command\Tv\Receiver as TvReceiver;

class CommandOn implements CommandInterface
{
    protected $output;

    public function __construct(TvReceiver $console)
    {
        $this->output = $console;
    }

    public function execute()
    {
        $this->output->turnOn();
    }
}
