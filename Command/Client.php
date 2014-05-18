<?php

namespace DesignPatterns\Command;

/**
 * Client is responsible for creating a ConcreteCommand and setting its a Receiver
 */
class Client
{
    /**
     * Creates a ConcreteCommand object, sets its receiver and test invoker
     */
    public function run()
    {
        $receiver = new Receiver();
        $helloCommand = new HelloCommand($receiver);

        $invoker = new Invoker();
        $invoker->setCommand($helloCommand);
        $invoker->run();
    }
}
