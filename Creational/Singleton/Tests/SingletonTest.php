<?php

namespace DesignPatterns\Creational\Singleton\Tests;

use DesignPatterns\Creational\Singleton\Singleton;

/**
 * SingletonTest tests the singleton pattern.
 */
class SingletonTest extends \PHPUnit_Framework_TestCase
{
    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $this->assertInstanceOf('DesignPatterns\Creational\Singleton\Singleton', $firstCall);
        $secondCall = Singleton::getInstance();
        $this->assertSame($firstCall, $secondCall);
    }

    public function testNoConstructor()
    {
        $obj = Singleton::getInstance();

        $refl = new \ReflectionObject($obj);
        $meth = $refl->getMethod('__construct');
        $this->assertTrue($meth->isPrivate());
    }

    /**
     * @expectedException \DesignPatterns\Creational\Singleton\SingletonPatternViolationException
     *
     * @return void
     */
    public function testNoCloneAllowed()
    {
        $obj1 = Singleton::getInstance();
        $obj2 = clone $obj1;
    }

    /**
     * @expectedException \DesignPatterns\Creational\Singleton\SingletonPatternViolationException
     *
     * @return void
     */
    public function testNoSerializationAllowed()
    {
        $obj1 = Singleton::getInstance();
        $serialized = serialize($obj1);
        $obj2 = unserialize($serialized);
    }
}
