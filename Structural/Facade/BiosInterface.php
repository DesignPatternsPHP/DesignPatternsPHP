<?php

namespace DesignPatterns\Structural\Facade;

/**
 * Interface BiosInterface.
 */
interface BiosInterface
{
    /**
     * Execute the BIOS.
     */
    public function execute();

    /**
     * Wait for halt.
     */
    public function waitForKeyPress();

    /**
     * Launches the OS.
     *
     * @param OsInterface $os
     */
    public function launch(OsInterface $os);

    /**
     * Power down BIOS.
     */
    public function powerDown();
}
