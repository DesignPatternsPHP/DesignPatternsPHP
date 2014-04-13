<?php

namespace DesignPatterns\Tests\Memento;

use DesignPatterns\Memento;

/**
 * MementoTest tests memento design pattern
 */
class MementoTest extends \PHPUnit_Framework_TestCase
{

    public function testOriginator()
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
}
