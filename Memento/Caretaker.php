<?php

namespace DesignPatterns\Memento;

class Caretaker
{
    public static function run()
    {
        /* @var $savedStates Memento[] */

        $savedStates = array();

        $originator = new Originator();

        //Setting state to State1
        $originator->setState("State1");
        //Setting state to State2
        $originator->setState("State2");
        //Saving State2 to Memento
        $savedStates[] = $originator->saveToMemento();
        //Setting state to State3
        $originator->setState("State3");

        // We can request multiple mementos, and choose which one to roll back to.
        // Saving State3 to Memento
        $savedStates[] = $originator->saveToMemento();
        //Setting state to State4
        $originator->setState("State4");

        $originator->restoreFromMemento($savedStates[1]);
        //State after restoring from Memento: State3
    }
}
