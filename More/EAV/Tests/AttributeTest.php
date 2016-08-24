<?php

namespace DesignPatterns\More\EAV\Tests;

use DesignPatterns\More\EAV\Attribute;
use DesignPatterns\More\EAV\Value;

/**
 * AttributeTest tests the Attribute model of EAV pattern.
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
        $colorGold = new Value($attribute);
        $colorGold->setName('Gold');

        $this->assertTrue($attribute->getValues()->contains($colorSilver));
        $this->assertTrue($attribute->getValues()->contains($colorGold));
    }

    /**
     * @depends testAddValue
     */
    public function testRemoveValue()
    {
        $attribute = new Attribute();
        $attribute->setName('Color');

        $colorSilver = new Value($attribute);
        $colorSilver->setName('Silver');
        $colorGold = new Value($attribute);
        $colorGold->setName('Gold');

        $attribute->removeValue($colorSilver);

        $this->assertFalse($attribute->getValues()->contains($colorSilver));
        $this->assertTrue($attribute->getValues()->contains($colorGold));
    }
}
