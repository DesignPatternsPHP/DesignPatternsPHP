<?php

namespace DesignPatterns\More\EAV\Tests;

use DesignPatterns\More\EAV\Attribute;
use DesignPatterns\More\EAV\Value;

/**
 * ValueTest tests the Value model of EAV pattern.
 */
class ValueTest extends \PHPUnit_Framework_TestCase
{
    public function testCreationSuccessWithAttribute()
    {
        $attribute = new Attribute();
        $attribute->setName('Color');

        $value = new Value($attribute);

        $this->assertInstanceOf('\DesignPatterns\More\EAV\Value', $value);
    }

    public function testSetGetName()
    {
        $attribute = new Attribute();
        $attribute->setName('Color');

        $value = new Value($attribute);
        $value->setName('Silver');

        $this->assertEquals('Silver', $value->getName());
    }

    public function testSetGetAttribute()
    {
        $attribute = new Attribute();
        $attribute->setName('Color');

        $value = new Value($attribute);
        $value->setName('Silver');
        $this->assertSame($attribute, $value->getAttribute());

        $value->setAttribute($attribute);
        $this->assertSame($attribute, $value->getAttribute());
    }
}
