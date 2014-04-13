<?php

namespace DesignPatterns\Memento;

class Memento
{
    /* @var string */
    private $state;

    /**
     * @param string $stateToSave
     */
    public function __construct($stateToSave)
    {
        $this->state = $stateToSave;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }
}
