<?php

namespace DesignPatterns\More\Delegation\Tests;

use DesignPatterns\More\Delegation;
use PHPUnit\Framework\TestCase;

class DelegationTest extends TestCase
{
    public function testHowTeamLeadWriteCode()
    {
        $junior = new Delegation\JuniorDeveloper();
        $teamLead = new Delegation\TeamLead($junior);

        $this->assertEquals($junior->writeBadCode(), $teamLead->writeCode());
    }
}
