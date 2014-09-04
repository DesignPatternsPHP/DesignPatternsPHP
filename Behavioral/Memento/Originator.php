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
        $this->state = $state;
    }

    /**
     * @return Memento
     */
    public function saveToMemento()
    {
        $state = is_object($this->state) ? clone $this->state : $this->state;

        return new Memento($state);
    }

    public function restoreFromMemento(Memento $memento)
    {
        $this->state = $memento->getState();
    }
}
