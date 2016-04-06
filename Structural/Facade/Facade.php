<?php

namespace DesignPatterns\Structural\Facade;

/**
 * Class Facade.
 */
class Facade
{
    /**
     * @var OsInterface
     */
    protected $os;

    /**
     * @var BiosInterface
     */
    protected $bios;

    /**
     * This is the perfect time to use a dependency injection container
     * to create an instance of this class.
     *
     * @param BiosInterface $bios
     * @param OsInterface   $os
     */
    public function __construct(BiosInterface $bios, OsInterface $os)
    {
        $this->bios = $bios;
        $this->os = $os;
    }

    /**
     * Turn on the system.
     */
    public function turnOn()
    {
        $this->bios->execute();
        $this->bios->waitForKeyPress();
        $this->bios->launch($this->os);
    }

    /**
     * Turn off the system.
     */
    public function turnOff()
    {
        $this->os->halt();
        $this->bios->powerDown();
    }
}
