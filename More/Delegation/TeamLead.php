<?php

namespace DesignPatterns\More\Delegation;

/**
 * Class TeamLead
 * @package DesignPatterns\Delegation
 * The `TeamLead` class, he delegate work to `Developer`
 */
class TeamLead
{
    /** @var Developer */
    protected $slave;

    /**
     * Give junior developer into teamlead submission
     * @param Developer $junior
     * TOTO Developer as an interface
     */
    public function __construct(Developer $junior)
    {
        $this->slave = $junior;
    }

    /**
     * TeamLead drink coffee, junior work
     * @return mixed
     */
    public function writeCode()
    {
        // but he just wants the code in hope it would be good
        return $this->slave->writeCode();
    }
}
