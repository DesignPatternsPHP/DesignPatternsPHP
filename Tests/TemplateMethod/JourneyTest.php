<?php

namespace DesignPatterns\Tests\TemplateMethod;

use DesignPatterns\TemplateMethod;

/**
 * JourneyTest tests all journeys
 */
class JourneyTest extends \PHPUnit_Framework_TestCase
{

    public function testBeach()
    {
        $journey = new TemplateMethod\BeachJourney();
        $this->expectOutputRegex('#sun-bathing#');
        $journey->takeATrip();
    }

    public function testCity()
    {
        $journey = new TemplateMethod\CityJourney();
        $this->expectOutputRegex('#drink#');
        $journey->takeATrip();
    }

    /**
     * How to test an abstract template method with PHPUnit
     */
    public function testLasVegas()
    {
        $journey = $this->getMockForAbstractClass('DesignPatterns\TemplateMethod\Journey');
        $journey->expects($this->once())
                ->method('enjoyVacation')
                ->will($this->returnCallback(array($this, 'mockUpVacation')));
        $this->expectOutputRegex('#Las Vegas#');
        $journey->takeATrip();
    }

    public function mockUpVacation()
    {
        echo "Fear and loathing in Las Vegas\n";
    }

}