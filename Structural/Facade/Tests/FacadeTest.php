<?php

namespace DesignPatterns\Structural\Facade\Tests;

use DesignPatterns\Structural\Facade\Facade as Computer;
use DesignPatterns\Structural\Facade\OsInterface;

/**
 * FacadeTest shows example of facades.
 */
class FacadeTest extends \PHPUnit_Framework_TestCase
{
    public function getComputer()
    {
        $bios = $this->getMockBuilder('DesignPatterns\Structural\Facade\BiosInterface')
                ->setMethods(array('launch', 'execute', 'waitForKeyPress'))
                ->disableAutoload()
                ->getMock();
        $operatingSys = $this->getMockBuilder('DesignPatterns\Structural\Facade\OsInterface')
                ->setMethods(array('getName'))
                ->disableAutoload()
                ->getMock();
        $bios->expects($this->once())
                ->method('launch')
                ->with($operatingSys);
        $operatingSys
                ->expects($this->once())
                ->method('getName')
                ->will($this->returnValue('Linux'));

        $facade = new Computer($bios, $operatingSys);

        return array(array($facade, $operatingSys));
    }

    /**
     * @param Computer $facade
     * @param OsInterface $os
     * @dataProvider getComputer
     */
    public function testComputerOn(Computer $facade, OsInterface $os)
    {
        // interface is simpler :
        $facade->turnOn();
        // but I can access to lower component
        $this->assertEquals('Linux', $os->getName());
    }
}
