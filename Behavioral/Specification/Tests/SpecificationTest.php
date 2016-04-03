<?php

namespace DesignPatterns\Behavioral\Specification\Tests;

use DesignPatterns\Behavioral\Specification\Item;
use DesignPatterns\Behavioral\Specification\PriceSpecification;

/**
 * SpecificationTest tests the specification pattern.
 */
class SpecificationTest extends \PHPUnit_Framework_TestCase
{
    public function testSimpleSpecification()
    {
        $item = new Item(100);
        $spec = new PriceSpecification();

        $this->assertTrue($spec->isSatisfiedBy($item));

        $spec->setMaxPrice(50);
        $this->assertFalse($spec->isSatisfiedBy($item));

        $spec->setMaxPrice(150);
        $this->assertTrue($spec->isSatisfiedBy($item));

        $spec->setMinPrice(101);
        $this->assertFalse($spec->isSatisfiedBy($item));

        $spec->setMinPrice(100);
        $this->assertTrue($spec->isSatisfiedBy($item));
    }

    public function testNotSpecification()
    {
        $item = new Item(100);
        $spec = new PriceSpecification();
        $not = $spec->not();

        $this->assertFalse($not->isSatisfiedBy($item));

        $spec->setMaxPrice(50);
        $this->assertTrue($not->isSatisfiedBy($item));

        $spec->setMaxPrice(150);
        $this->assertFalse($not->isSatisfiedBy($item));

        $spec->setMinPrice(101);
        $this->assertTrue($not->isSatisfiedBy($item));

        $spec->setMinPrice(100);
        $this->assertFalse($not->isSatisfiedBy($item));
    }

    public function testPlusSpecification()
    {
        $spec1 = new PriceSpecification();
        $spec2 = new PriceSpecification();
        $plus = $spec1->plus($spec2);

        $item = new Item(100);

        $this->assertTrue($plus->isSatisfiedBy($item));

        $spec1->setMaxPrice(150);
        $spec2->setMinPrice(50);
        $this->assertTrue($plus->isSatisfiedBy($item));

        $spec1->setMaxPrice(150);
        $spec2->setMinPrice(101);
        $this->assertFalse($plus->isSatisfiedBy($item));

        $spec1->setMaxPrice(99);
        $spec2->setMinPrice(50);
        $this->assertFalse($plus->isSatisfiedBy($item));
    }

    public function testEitherSpecification()
    {
        $spec1 = new PriceSpecification();
        $spec2 = new PriceSpecification();
        $either = $spec1->either($spec2);

        $item = new Item(100);

        $this->assertTrue($either->isSatisfiedBy($item));

        $spec1->setMaxPrice(150);
        $spec2->setMaxPrice(150);
        $this->assertTrue($either->isSatisfiedBy($item));

        $spec1->setMaxPrice(150);
        $spec2->setMaxPrice(0);
        $this->assertTrue($either->isSatisfiedBy($item));

        $spec1->setMaxPrice(0);
        $spec2->setMaxPrice(150);
        $this->assertTrue($either->isSatisfiedBy($item));

        $spec1->setMaxPrice(99);
        $spec2->setMaxPrice(99);
        $this->assertFalse($either->isSatisfiedBy($item));
    }
}
