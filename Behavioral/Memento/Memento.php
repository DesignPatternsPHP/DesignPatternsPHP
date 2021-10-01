<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Memento;

class Memento
{
    public function __construct(private State $state)
    {
    }

    public function getState(): State
    {
        return $this->state;
    }
}
