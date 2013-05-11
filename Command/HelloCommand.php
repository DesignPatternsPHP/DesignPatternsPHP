<?php

namespace DesignPatterns\Command;

/**
 * This concrete command calls "print" on the Receiver, but an external
 * invoker just know he can call "execute" 
 */
class HelloCommand implements Command
{

    protected $output;

    /**
     * Each concrete command is builded with different receivers.
     * Can be one, many, none or even other Command in parameters 
     */
    public function __construct(Receiver $console)
    {
        $this->output = $console;
    }

    public function execute()
    {
        // sometimes, there is no receiver and this is the command which 
        // does all the work
        $this->output->write('Hello World');
    }

}