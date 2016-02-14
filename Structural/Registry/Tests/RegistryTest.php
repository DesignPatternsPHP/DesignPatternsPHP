<?php

namespace DesignPatterns\Structural\Registry\Tests;

use DesignPatterns\Structural\Registry\Registry;

class RegistryTest extends \PHPUnit_Framework_TestCase
{
    public function testSetAndGetLogger()
    {
        $key = Registry::LOGGER;
        $object = new \StdClass();

        Registry::set($key, $object);
        $actual = Registry::get($key);

        $this->assertEquals($object, $actual);
        $this->assertInstanceOf('StdClass', $actual);
    }
}
