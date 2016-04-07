<?php

namespace DesignPatterns\Behavioral\Memento;

class Caretaker
{
    protected $history = array();

    /**
     * @return Memento
     */
    public function getFromHistory($id)
    {
        return $this->history[$id];
    }

    /**
     * @param Memento $state
     */
    public function saveToHistory(Memento $state)
    {
        $this->history[] = $state;
    }

    public function runCustomLogic()
    {
        $originator = new Originator();

        //Setting state to State1
        $originator->setState('State1');
        //Setting state to State2
        $originator->setState('State2');
        //Saving State2 to Memento
        $this->saveToHistory($originator->getStateAsMemento());
        //Setting state to State3
        $originator->setState('State3');

        // We can request multiple mementos, and choose which one to roll back to.
        // Saving State3 to Memento
        $this->saveToHistory($originator->getStateAsMemento());
        //Setting state to State4
        $originator->setState('State4');

        $originator->restoreFromMemento($this->getFromHistory(1));
        //State after restoring from Memento: State3

        return $originator->getStateAsMemento()->getState();
    }
}
