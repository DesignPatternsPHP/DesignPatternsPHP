<?php

namespace DesignPatterns\Command;

/**
 * This concrete command calls "print" on the Receiver, but an external
 * invoker just know he can call "execute" 
 */
class HelloCommand implements CommandInterface
{
    /**
     * @var Receiver
     */
    protected $output;

    /**
     * Each concrete command is builded with different receivers.
     * Can be one, many, none or even other Command in parameters
     *
     * @param Receiver $console
     */
    public function __construct(Receiver $console)
    {
        $this->output = $console;
    }

    /**
     * execute and output "Hello World"
     */
    public function execute()
    {
        // sometimes, there is no receiver and this is the command which
        // does all the work
        $this->output->write('Hello World');
    }
}
