<?php

namespace DesignPatterns\More\EAV\Tests;

use DesignPatterns\More\EAV\Attribute;
use DesignPatterns\More\EAV\Value;

/**
 * AttributeTest tests the Attribute model of EAV pattern
 */
class AttributeTest extends \PHPUnit_Framework_TestCase
{
    public function testCreationSuccess()
    {
        $attribute = new Attribute();

        $this->assertInstanceOf('\DesignPatterns\More\EAV\Attribute', $attribute);
    }

    /**
     * @depends testCreationSuccess
     */
    public function testSetGetName()
    {
        $attribute = new Attribute();
        $attribute->setName('Color');

        $this->assertEquals('Color', $attribute->getName());
    }

    /**
     * @depends testCreationSuccess
     */
    public function testAddValue()
    {
        $attribute = new Attribute();
        $attribute->setName('Color');

        $colorSilver = new Value($attribute);
        $colorSilver->setName('Silver');
        $values[] = $colorSilver;
        $colorGold = new Value($attribute);
        $colorGold->setName('Gold');
        $values[] = $colorGold;
        $colorSpaceGrey = new Value($attribute);
        $colorSpaceGrey->setName('Space Grey');
        $values[] = $colorSpaceGrey;

        $this->assertEquals($values, $attribute->getValues());
    }

    /**
     * @depends testAddValue
     */
    public function testRemoveValue()
    {
        $values = array();

        $attribute = new Attribute();
        $attribute->setName('Color');

        $colorSilver = new Value($attribute);
        $colorSilver->setName('Silver');
        $values[] = $colorSilver;
        $colorGold = new Value($attribute);
        $colorGold->setName('Gold');
        $values[] = $colorGold;
        $colorSpaceGrey = new Value($attribute);
        $colorSpaceGrey->setName('Space Grey');
        $values[] = $colorSpaceGrey;

        $randomIndex = array_rand($values);
        $attribute->removeValue($values[$randomIndex]);
        unset($values[$randomIndex]);

        $this->assertEquals($values, $attribute->getValues());
    }
}
