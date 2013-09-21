<?php

namespace DesignPatterns\Tests\NullObject;

use DesignPatterns\NullObject\NullLogger;
use DesignPatterns\NullObject\Service;
use DesignPatterns\NullObject\PrintLogger;

/**
 * LoggerTest tests for different loggers
 */
class LoggerTest extends \PHPUnit_Framework_TestCase
{

    public function testNullObject()
    {
        // one can use a singleton for NullObjet : I don't think it's a good idea
        // because the purpose behind null object is to "avoid special case".
        $service = new Service(new NullLogger());
        $this->expectOutputString(null);  // no output
        $service->doSomething();
    }

    public function testStandardLogger()
    {
        $service = new Service(new PrintLogger());
        $this->expectOutputString('We are in DesignPatterns\NullObject\Service::doSomething');
        $service->doSomething();
    }
}
