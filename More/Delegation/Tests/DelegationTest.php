<?php

namespace DesignPatterns\More\Delegation\Tests;

use DesignPatterns\More\Delegation;

/**
 * DelegationTest tests the delegation pattern.
 */
class DelegationTest extends \PHPUnit_Framework_TestCase
{
    public function testHowTeamLeadWriteCode()
    {
        $junior = new Delegation\JuniorDeveloper();
        $teamLead = new Delegation\TeamLead($junior);
        $this->assertEquals($junior->writeBadCode(), $teamLead->writeCode());
    }
}
