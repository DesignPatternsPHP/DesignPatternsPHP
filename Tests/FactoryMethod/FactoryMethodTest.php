<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\Tests\FactoryMethod;

use DesignPatterns\FactoryMethod;

/**
 * FactoryMethodTest tests the factory method pattern
 */
class FactoryMethodTest extends \PHPUnit_Framework_TestCase
{

    protected $type = array('cheap', 'fast');

    public function getShop()
    {
        return array(
            array(new FactoryMethod\GermanFactory()),
            array(new FactoryMethod\ItalianFactory())
        );
    }

    /**
     * @dataProvider getShop
     */
    public function testCreation(FactoryMethod\FactoryMethod $shop)
    {
        // this test method acts as a client for the factory. We don't care
        // about the factory, all we know is it can produce vehicle
        foreach ($this->type as $oneType) {
            $vehicle = $shop->create($oneType);
            $this->assertInstanceOf('DesignPatterns\FactoryMethod\Vehicle', $vehicle);
        }
    }

    /**
     * @dataProvider getShop
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage spaceship is not a valid vehicle
     */
    public function testUnknownType(FactoryMethod\FactoryMethod $shop)
    {
        $shop->create('spaceship');
    }

}