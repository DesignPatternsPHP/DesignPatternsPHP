<?php

namespace DesignPatterns\Behavioral\Mediator;

/**
 * Colleague is an abstract colleague who works together but he only knows
 * the Mediator, not other colleague.
 */
abstract class Colleague
{
    /**
     * this ensures no change in subclasses.
     *
     * @var MediatorInterface
     */
    private $mediator;

    /**
     * @param MediatorInterface $medium
     */
    public function __construct(MediatorInterface $medium)
    {
        // in this way, we are sure the concrete colleague knows the mediator
        $this->mediator = $medium;
    }

    // for subclasses

    protected function getMediator()
    {
        return $this->mediator;
    }
}
