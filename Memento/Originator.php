<?php

namespace DesignPatterns\Memento;

class Originator
{
    /* @var string */
    private $state;

    // The class could also contain additional data that is not part of the
    // state saved in the memento..

    /**
     * @param string $state
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
        return new Memento($this->state);
    }

    public function restoreFromMemento(Memento $memento)
    {
        $this->state = $memento->getState();
    }
}
