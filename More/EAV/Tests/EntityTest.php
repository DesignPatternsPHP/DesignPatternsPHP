<?php

namespace DesignPatterns\More\EAV\Tests;

use DesignPatterns\More\EAV\Entity;
use DesignPatterns\More\EAV\Attribute;
use DesignPatterns\More\EAV\Value;

/**
 * EntityTest tests the Entity model of EAV pattern
 */
class EntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider valueProvider
     *
     * @var string $name
     */
    public function testSetGetName($name)
    {
        $macBook = new Entity();
        $macBook->setName($name);

        $this->assertEquals($name, $macBook->getName());
    }

    /**
     * @dataProvider valueProvider
     *
     * @var string $name
     * @var array|Value[] $values
     */
    public function testAddValue($name, array $values)
    {
        $macBook = new Entity();
        $macBook->setName($name);

        foreach ($values as $value) {
            $macBook->addValue($value);
        }

        $this->assertEquals($values, $macBook->getValues());
    }

    /**
     * @depends testAddValue
     * @dataProvider valueProvider
     *
     * @var string $name
     * @var array|Value[] $values
     */
    public function testRemoveValue($name, array $values)
    {
        $macBook = new Entity();
        $macBook->setName($name);

        foreach ($values as $value) {
            $macBook->addValue($value);
        }

        $randomIndex = array_rand($values);
        $macBook->removeValue($values[$randomIndex]);
        unset($values[$randomIndex]);

        $this->assertEquals($values, $macBook->getValues());
    }

    /**
     * @return array
     */
    public function valueProvider()
    {
        // color attribute
        $color = (new Attribute())->setName('Color');
        // color values
        $colorSilver    = (new Value($color))->setName('Silver');
        $colorGold      = (new Value($color))->setName('Gold');
        $colorSpaceGrey = (new Value($color))->setName('Space Grey');

        // memory attribute
        $memory = (new Attribute())->setName('Memory');
        // memory values
        $memory4Gb  = (new Value($memory))->setName('4GB');
        $memory8Gb  = (new Value($memory))->setName('8GB');
        $memory16Gb = (new Value($memory))->setName('16GB');

        // storage attribute
        $storage = (new Attribute())->setName('Storage');
        // storage values
        $storage128Gb = (new Value($storage))->setName('128GB');
        $storage256Gb = (new Value($storage))->setName('256GB');
        $storage512Gb = (new Value($storage))->setName('512GB');
        $storage1Tb   = (new Value($storage))->setName('1TB');

        return [
            [
                'MacBook',
                [
                    $colorSilver,
                    $colorGold,
                    $colorSpaceGrey,
                    $memory8Gb,
                    $storage256Gb,
                    $storage512Gb,
                ],
            ],
            [
                'MacBook Air',
                [
                    $colorSilver,
                    $memory4Gb,
                    $memory8Gb,
                    $storage128Gb,
                    $storage256Gb,
                    $storage512Gb,
                ],
            ],
            [
                'MacBook Pro',
                [
                    $colorSilver,
                    $memory8Gb,
                    $memory16Gb,
                    $storage128Gb,
                    $storage256Gb,
                    $storage512Gb,
                    $storage1Tb,
                ],
            ],
        ];
    }
}
