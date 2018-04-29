<?php

namespace DesignPatterns\More\Delegation;

class JuniorDeveloper
{
    public function writeBadCode(): string
    {
        return 'Some junior developer generated code...';
    }
    /**
     * Junior is authorized to call method on TeamLead (real delegation)
     */
    public function writeReallyBadCode(TeamLead $teamLead): string
    {
        return $teamLead->writeReallyBadCode();
    }
}
