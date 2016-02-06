<?php

namespace DesignPatterns\Structural\Registry\Tests;

use DesignPatterns\Structural\Registry\Registry;

class RegistryTest extends \PHPUnit_Framework_TestCase
{
    public function testSimpleGetSet()
    {
        $key = 'myIdentifier';
        $object = new \StdClass();
        $object->props = array('a' => 1, 'b' => 2);
        
        Registry::set($key, $object);
        $actual = Registry::get($key);
        
        $this->assertEquals($object, $actual);
        $this->assertInstanceOf('StdClass', $actual);
    }
    
    public function testSetAndGetLogger()
    {
        Registry::set(Registry::LOGGER, new \StdClass());

        $logger = Registry::get(Registry::LOGGER);
        $this->assertInstanceOf('StdClass', $logger);
    }
}
