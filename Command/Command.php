<?php

namespace DesignPatterns;

/**
 * Command pattern
 *
 * Purpose: To encapsulate invocation and decoupling
 * 
 * We have an Invoker and a Receiver. This pattern use a "Command" to delegate the
 * method call against the Receiver and use the same method "execute".
 * Therefore, the Invoker just know to call "execute" to process the Command of
 * the client. 
 * 
 * The second aspect of ths pattern is the undo(), which undoes the method execute()
 * Command can also be agregated to combine more complex commands with minimum
 * copy-paste and relying on composition over inheritance.
 *
 * Examples:
 * - A text editor : all events are Command which can be undone, stacked and saved. 
 * - Symfony2: SF2 Commands that can be run from the CLI are built with just the Command pattern in mind
 * - big CLI tools use subcommands to distribute various tasks and pack them in "modules", each of these
 *   can be implemented with the Command pattern (e.g. vagrant)
 *
 */
interface CommandInterface
{
    /**
     * this is the most important method in the Command pattern,
     * all config options and parameters should go into the constructor
     *
     * @return mixed
     */
    public function execute();
}

class EchoCommand implements CommandInterface
{
    public function __construct($what)
    {
        $this->what = (string)$what;
    }

    public function execute()
    {
        echo $this->what;
    }
}