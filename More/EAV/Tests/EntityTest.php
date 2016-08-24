<?php

namespace DesignPatterns\More\EAV\Tests;

use DesignPatterns\More\EAV\Attribute;
use DesignPatterns\More\EAV\Entity;
use DesignPatterns\More\EAV\Value;

/**
 * EntityTest tests the Entity model of EAV pattern.
 */
class EntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider valueProvider
     *
     * @var string
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
     * @var string
     * @var Value[] $values
     */
    public function testAddValue($name, array $values)
    {
        $macBook = new Entity();
        $macBook->setName($name);

        foreach ($values as $value) {
            $macBook->addValue($value);
            $this->assertTrue($macBook->getValues()->contains($value));
        }

        $this->assertCount(count($values), $macBook->getValues());
    }

    /**
     * @depends testAddValue
     * @dataProvider valueProvider
     *
     * @var string
     * @var Value[] $values
     */
    public function testRemoveValue($name, array $values)
    {
        $macBook = new Entity();
        $macBook->setName($name);

        foreach ($values as $value) {
            $macBook->addValue($value);
        }
        $macBook->removeValue($values[0]);

        $this->assertFalse($macBook->getValues()->contains($values[0]));
        unset($values[0]);
        $this->assertCount(count($values), $macBook->getValues());
    }

    /**
     * @return array
     */
    public function valueProvider()
    {
        // color attribute
        $color = new Attribute();
        $color->setName('Color');
        // color values
        $colorSilver = new Value($color);
        $colorSilver->setName('Silver');
        $colorGold = new Value($color);
        $colorGold->setName('Gold');
        $colorSpaceGrey = new Value($color);
        $colorSpaceGrey->setName('Space Grey');

        // memory attribute
        $memory = new Attribute();
        $memory->setName('Memory');
        // memory values
        $memory4Gb = new Value($memory);
        $memory4Gb->setName('4GB');
        $memory8Gb = new Value($memory);
        $memory8Gb->setName('8GB');
        $memory16Gb = new Value($memory);
        $memory16Gb->setName('16GB');

        // storage attribute
        $storage = new Attribute();
        $storage->setName('Storage');
        // storage values
        $storage128Gb = new Value($storage);
        $storage128Gb->setName('128GB');
        $storage256Gb = new Value($storage);
        $storage256Gb->setName('256GB');
        $storage512Gb = new Value($storage);
        $storage512Gb->setName('512GB');
        $storage1Tb = new Value($storage);
        $storage1Tb->setName('1TB');

        return array(
            array(
                'MacBook',
                array(
                    $colorSilver,
                    $colorGold,
                    $colorSpaceGrey,
                    $memory8Gb,
                    $storage256Gb,
                    $storage512Gb,
                ),
            ),
            array(
                'MacBook Air',
                array(
                    $colorSilver,
                    $memory4Gb,
                    $memory8Gb,
                    $storage128Gb,
                    $storage256Gb,
                    $storage512Gb,
                ),
            ),
            array(
                'MacBook Pro',
                array(
                    $colorSilver,
                    $memory8Gb,
                    $memory16Gb,
                    $storage128Gb,
                    $storage256Gb,
                    $storage512Gb,
                    $storage1Tb,
                ),
            ),
        );
    }
}
