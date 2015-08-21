<?php

namespace DesignPatterns\More\Delegation;

/**
 * Class TeamLead
 * @package DesignPatterns\Delegation
 * The `TeamLead` class, he delegate work to `JuniorDeveloper`
 */
class TeamLead
{
    /** @var Developer */
    protected $slave;

    /**
     * Give junior developer into teamlead submission
     * @param JuniorDeveloper $junior
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
