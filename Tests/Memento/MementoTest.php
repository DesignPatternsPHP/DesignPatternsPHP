<?php

namespace DesignPatterns\Tests\Memento;

use DesignPatterns\Memento;

/**
 * MementoTest tests the memento pattern
 */
class MementoTest extends \PHPUnit_Framework_TestCase
{

    public function testStringState()
    {
        $originator = new Memento\Originator();
        $originator->setState("State1");

        $this->assertAttributeEquals("State1", "state", $originator);

        $originator->setState("State2");

        $this->assertAttributeEquals("State2", "state", $originator);

        $savedState = $originator->saveToMemento();

        $this->assertAttributeEquals("State2", "state", $savedState);

        $originator->setState("State3");

        $this->assertAttributeEquals("State3", "state", $originator);

        $originator->restoreFromMemento($savedState);

        $this->assertAttributeEquals("State2", "state", $originator);
    }

    public function testObjectState()
    {
        $originator = new Memento\Originator();

        $foo = new \stdClass();
        $foo->data = "foo";

        $originator->setState($foo);

        $this->assertAttributeEquals($foo, "state", $originator);

        $savedState = $originator->saveToMemento();

        $this->assertAttributeEquals($foo, "state", $savedState);

        $bar = new \stdClass();
        $bar->data = "bar";

        $originator->setState($bar);

        $this->assertAttributeEquals($bar, "state", $originator);

        $originator->restoreFromMemento($savedState);

        $this->assertAttributeEquals($foo, "state", $originator);

        $foo->data = null;

        $this->assertAttributeNotEquals($foo, "state", $savedState);

        $this->assertAttributeNotEquals($foo, "state", $originator);
    }
}
