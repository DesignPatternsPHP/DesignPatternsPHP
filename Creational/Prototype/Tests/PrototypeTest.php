<?php
declare(strict_types = 1);

namespace DesignPatterns\Creational\Prototype\Tests;

use DesignPatterns\Creational\Prototype\BarBookPrototype;
use DesignPatterns\Creational\Prototype\FooBookPrototype;

/**
 * Class PrototypeTest
 * @package DesignPatterns\Creational\Prototype\Tests
 */
class PrototypeTest extends \PHPUnit_Framework_TestCase
{

    /** @var FooBookPrototype */
    protected $fooBookPrototype;

    /** @var BarBookPrototype */
    protected $barBookPrototype;

    protected function setUp()
    {
        $this->fooBookPrototype = new FooBookPrototype();
        $this->barBookPrototype = new BarBookPrototype();
    }

    public function testCloneOfFooBookPrototype()
    {
        for ($i = 0; $i < 100; $i++) {
            $book = clone $this->fooBookPrototype;

            $this->assertInstanceOf('DesignPatterns\Creational\Prototype\FooBookPrototype', $book);
            $this->assertNotSame($this->fooBookPrototype, $book);
        }
    }

    public function testCloneOfBarBookPrototype()
    {
        for ($i = 0; $i < 100; $i++) {
            $book = clone $this->barBookPrototype;

            $this->assertInstanceOf('DesignPatterns\Creational\Prototype\BarBookPrototype', $book);
            $this->assertNotSame($this->barBookPrototype, $book);
        }
    }
}
