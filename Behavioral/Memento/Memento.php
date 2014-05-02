<?php

namespace DesignPatterns\Behavioral\Memento;

class Memento
{
    /* @var mixed */
    private $state;

    /**
     * @param mixed $stateToSave
     */
    public function __construct($stateToSave)
    {
        $this->state = $stateToSave;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }
}
