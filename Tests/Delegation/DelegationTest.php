<?php

namespace DesignPatterns\Tests\Delegation;

use DesignPatterns\Delegation;

/**
 * DelegationTest tests the delegation pattern
 */
class DelegationTest extends \PHPUnit_Framework_TestCase
{
	public function testHowTeamLeadWriteCode()
	{
		$teamLead = new Delegation\TeamLead(
			new Delegation\JuniorDeveloper()
		);
		$this->assertEquals("Some junior developer generated code...", $teamLead->writeCode());
	}
}
