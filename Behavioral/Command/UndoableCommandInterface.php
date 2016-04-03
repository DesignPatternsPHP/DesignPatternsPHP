<?php

namespace DesignPatterns\Behavioral\Command;

/**
 * Interface UndoableCommandInterface.
 */
interface UndoableCommandInterface extends CommandInterface
{
    /**
     * This method is used to undo change made by command execution
     * The Receiver goes in the constructor.
     */
    public function undo();
}
