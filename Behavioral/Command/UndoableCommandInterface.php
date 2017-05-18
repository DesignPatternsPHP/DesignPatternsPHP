<?php

namespace DesignPatterns\Behavioral\Command;

interface UndoableCommandInterface extends CommandInterface
{
    /**
     * This method is used to undo change made by command execution
     */
    public function undo();
}
