<?php

namespace DesignPatterns\Tests\Visitor;

use DesignPatterns\Visitor;

/**
 * VisitorTest tests the visitor pattern
 */
class VisitorTest extends \PHPUnit_Framework_TestCase
{

    protected $visitor;

    protected function setUp()
    {
        $this->visitor = new Visitor\RolePrintVisitor();
    }

    public function getRole()
    {
        return array(
            array(new Visitor\User("Dominik"), 'Role: User Dominik'),
            array(new Visitor\Group("Administrators"), 'Role: Group: Administrators')
        );
    }

    /**
     * @dataProvider getRole
     */
    public function testVisitSomeRole(Visitor\Role $role, $expect)
    {
        $this->expectOutputString($expect);
        $role->accept($this->visitor);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Mock
     */
    public function testUnknownObject()
    {
        $mock = $this->getMockForAbstractClass('DesignPatterns\Visitor\Role');
        $mock->accept($this->visitor);
    }

}