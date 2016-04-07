<?php

namespace DesignPatterns\Behavioral\Memento\Tests;

use DesignPatterns\Behavioral\Memento\Caretaker;
use DesignPatterns\Behavioral\Memento\Memento;
use DesignPatterns\Behavioral\Memento\Originator;

/**
 * MementoTest tests the memento pattern.
 */
class MementoTest extends \PHPUnit_Framework_TestCase
{
    public function testUsageExample()
    {
        $originator = new Originator();
        $caretaker = new Caretaker();

        $character = new \stdClass();
        // new object
        $character->name = 'Gandalf';
        // connect Originator to character object
        $originator->setState($character);

        // work on the object
        $character->name = 'Gandalf the Grey';
        // still change something
        $character->race = 'Maia';
        // time to save state
        $snapshot = $originator->getStateAsMemento();
        // put state to log
        $caretaker->saveToHistory($snapshot);

        // change something
        $character->name = 'Sauron';
        // and again
        $character->race = 'Ainur';
        // state inside the Originator was equally changed
        $this->assertAttributeEquals($character, 'state', $originator);

        // time to save another state
        $snapshot = $originator->getStateAsMemento();
        // put state to log
        $caretaker->saveToHistory($snapshot);

        $rollback = $caretaker->getFromHistory(0);
        // return to first state
        $originator->restoreFromMemento($rollback);
        // use character from old state
        $character = $rollback->getState();

        // yes, that what we need
        $this->assertEquals('Gandalf the Grey', $character->name);
        // make new changes
        $character->name = 'Gandalf the White';

        // and Originator linked to actual object again
        $this->assertAttributeEquals($character, 'state', $originator);
    }

    public function testStringState()
    {
        $originator = new Originator();
        $originator->setState('State1');

        $this->assertAttributeEquals('State1', 'state', $originator);

        $originator->setState('State2');
        $this->assertAttributeEquals('State2', 'state', $originator);

        $snapshot = $originator->getStateAsMemento();
        $this->assertAttributeEquals('State2', 'state', $snapshot);

        $originator->setState('State3');
        $this->assertAttributeEquals('State3', 'state', $originator);

        $originator->restoreFromMemento($snapshot);
        $this->assertAttributeEquals('State2', 'state', $originator);
    }

    public function testSnapshotIsClone()
    {
        $originator = new Originator();
        $object = new \stdClass();

        $originator->setState($object);
        $snapshot = $originator->getStateAsMemento();
        $object->new_property = 1;

        $this->assertAttributeEquals($object, 'state', $originator);
        $this->assertAttributeNotEquals($object, 'state', $snapshot);

        $originator->restoreFromMemento($snapshot);
        $this->assertAttributeNotEquals($object, 'state', $originator);
    }

    public function testCanChangeActualState()
    {
        $originator = new Originator();
        $first_state = new \stdClass();

        $originator->setState($first_state);
        $snapshot = $originator->getStateAsMemento();
        $second_state = $snapshot->getState();

        // still actual
        $first_state->first_property = 1;
        // just history
        $second_state->second_property = 2;
        $this->assertAttributeEquals($first_state, 'state', $originator);
        $this->assertAttributeNotEquals($second_state, 'state', $originator);

        $originator->restoreFromMemento($snapshot);
        // now it lost state
        $first_state->first_property = 11;
        // must be actual
        $second_state->second_property = 22;
        $this->assertAttributeEquals($second_state, 'state', $originator);
        $this->assertAttributeNotEquals($first_state, 'state', $originator);
    }

    public function testStateWithDifferentObjects()
    {
        $originator = new Originator();

        $first = new \stdClass();
        $first->data = 'foo';

        $originator->setState($first);
        $this->assertAttributeEquals($first, 'state', $originator);

        $first_snapshot = $originator->getStateAsMemento();
        $this->assertAttributeEquals($first, 'state', $first_snapshot);

        $second = new \stdClass();
        $second->data = 'bar';
        $originator->setState($second);
        $this->assertAttributeEquals($second, 'state', $originator);

        $originator->restoreFromMemento($first_snapshot);
        $this->assertAttributeEquals($first, 'state', $originator);
    }

    public function testCaretaker()
    {
        $caretaker = new Caretaker();
        $memento1 = new Memento('foo');
        $memento2 = new Memento('bar');
        $caretaker->saveToHistory($memento1);
        $caretaker->saveToHistory($memento2);
        $this->assertAttributeEquals(array($memento1, $memento2), 'history', $caretaker);
        $this->assertEquals($memento1, $caretaker->getFromHistory(0));
        $this->assertEquals($memento2, $caretaker->getFromHistory(1));
    }

    public function testCaretakerCustomLogic()
    {
        $caretaker = new Caretaker();
        $result = $caretaker->runCustomLogic();
        $this->assertEquals('State3', $result);
    }
}
