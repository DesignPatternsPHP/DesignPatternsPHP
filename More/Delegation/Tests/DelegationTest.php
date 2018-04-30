<?php

namespace DesignPatterns\More\Delegation\Tests;

use DesignPatterns\More\Delegation;
use PHPUnit\Framework\TestCase;

class DelegationTest extends TestCase
{
    /**
     * @test
     */
    public function teamLeadCanBlameJuniorForBadCode()
    {
        $junior = new Delegation\JuniorDeveloper();
        $teamLead = new Delegation\TeamLead($junior);

        $this->assertEquals($junior->writeBadCode(), $teamLead->writeCode());
    }

    /**
     * @test
     */
    public function teamLeadCanWriteBadCode()
    {
        $junior = new Delegation\JuniorDeveloper();
        $teamLead = new Delegation\TeamLead($junior);

        $this->assertEquals($junior->writeReallyBadCode($teamLead), $teamLead->writeBadCode());
    }
}
