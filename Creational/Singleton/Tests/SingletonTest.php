<?php

namespace DesignPatterns\Creational\Singleton\Tests;

use DesignPatterns\Creational\Singleton\Singleton;

class SingletonTest extends \PHPUnit_Framework_TestCase
{
    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        $this->assertInstanceOf('DesignPatterns\Creational\Singleton\Singleton', $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }

    /**
     * @expectedException \DesignPatterns\Creational\Singleton\SingletonPatternViolationException
     */
    public function testNoCloneAllowed()
    {
        $obj1 = Singleton::getInstance();
        $obj2 = clone $obj1;
    }

    /**
     * @expectedException \DesignPatterns\Creational\Singleton\SingletonPatternViolationException
     */
    public function testNoSerializationAllowed()
    {
        $obj1 = Singleton::getInstance();
        $serialized = serialize($obj1);
        unserialize($serialized);
    }
}
