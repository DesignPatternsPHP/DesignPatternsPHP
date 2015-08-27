<?php
declare(strict_types = 1);

namespace DesignPatterns\Creational\FactoryMethod\Tests;

use DesignPatterns\Creational\FactoryMethod\FactoryMethod;
use DesignPatterns\Creational\FactoryMethod\GermanFactory;
use DesignPatterns\Creational\FactoryMethod\ItalianFactory;

/**
 * Class FactoryMethodTest
 * @package DesignPatterns\Creational\FactoryMethod\Tests
 */
class FactoryMethodTest extends \PHPUnit_Framework_TestCase
{
    /** @var array */
    protected $type = [
        FactoryMethod::CHEAP,
        FactoryMethod::FAST,
    ];

    /** @var int */
    const UNKNOWN = 123;

    /**
     * @return array
     */
    public function getShop()
    {
        return [
            [new GermanFactory()],
            [new ItalianFactory()],
        ];
    }

    /**
     * @dataProvider getShop
     */
    public function testCreation(FactoryMethod $shop)
    {
        // this test method acts as a client for the factory. We don't care
        // about the factory, all we know is it can produce vehicle
        foreach ($this->type as $type) {
            $this->assertInstanceOf(
                'DesignPatterns\Creational\FactoryMethod\VehicleInterface',
                $shop->create($type)
            );
        }
    }

    /**
     * @dataProvider             getShop
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Not a valid vehicle, vehicles allowed: Cheap, Fast
     */
    public function testUnknownType(FactoryMethod $shop)
    {
        $shop->create(self::UNKNOWN);
    }
}
