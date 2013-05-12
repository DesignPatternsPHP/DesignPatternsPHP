<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\Mediator;

/**
 * Colleague is an abstract colleague who works together but he only knows
 * the Mediator, not other colleague.
 */
abstract class Colleague
{

    // this ensures no change in subclasses
    private $mediator;

    // for subclasses
    protected function getMediator()
    {
        return $this->mediator;
    }

    public function __construct(MediatorInterface $medium)
    {
        // in this way, we are sure the concrete colleague knows the mediator
        $this->mediator = $medium;
    }

}