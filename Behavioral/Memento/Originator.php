<?php

namespace DesignPatterns\Behavioral\Memento;

class Originator
{
    /* @var mixed */
    private $state;

    // The class could also contain additional data that is not part of the
    // state saved in the memento..

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        // you must check type of state inside child of this class
        // or use type-hinting for full pattern implementation
        $this->state = $state;
    }

    /**
     * @return Memento
     */
    public function getStateAsMemento()
    {
        // you must save a separate copy in Memento
        $state = is_object($this->state) ? clone $this->state : $this->state;

        return new Memento($state);
    }

    public function restoreFromMemento(Memento $memento)
    {
        $this->state = $memento->getState();
    }
}
