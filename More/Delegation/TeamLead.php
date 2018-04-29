<?php

namespace DesignPatterns\More\Delegation;

class TeamLead
{
    /**
     * @var JuniorDeveloper
     */
    private $junior;

    /**
     * @param JuniorDeveloper $junior
     */
    public function __construct(JuniorDeveloper $junior)
    {
        $this->junior = $junior;
    }

    public function writeCode(): string
    {
        return $this->junior->writeBadCode();
    }
    public function writeBadCode(): string
    {
        //note that we are passing $this from teamLead context
        return $this->junior->writeReallyBadCode($this);
    }
    /**
     * Junior can call this method
     */
    public function writeReallyBadCode(): string
    {
        return 'Even team lead can write bad code...';
    }
}
