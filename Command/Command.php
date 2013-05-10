<?php

namespace DesignPatterns;

/**
 * Command pattern
 *
 * Purpose:
 * to build a simple interface for commands that can all be run by just executing a single method they all have in
 * common, often called 'run' or 'execute'
 *
 * Examples:
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