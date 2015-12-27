<?php

namespace DesignPatterns\More\Delegation;

/**
 * Class TeamLead.
 */
class TeamLead
{
    /** @var JuniorDeveloper */
    protected $slave;

    /**
     * Give junior developer into teamlead submission.
     *
     * @param JuniorDeveloper $junior
     */
    public function __construct(JuniorDeveloper $junior)
    {
        $this->slave = $junior;
    }

    /**
     * TeamLead drink coffee, junior work.
     *
     * @return mixed
     */
    public function writeCode()
    {
        return $this->slave->writeBadCode();
    }
}
