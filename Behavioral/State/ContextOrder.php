<?php

namespace DesignPatterns\Behavioral\State;

class ContextOrder extends StateOrder
{
    /**
     * @return StateOrder
     */
    public function getState():StateOrder
    {
        return static::$state;
    }

    /**
     * @param StateOrder $state
     */
    public function setState(StateOrder $state)
    {
        static::$state = $state;
    }

    /**
     * @return mixed|void
     */
    public function done()
    {
        static::$state->done();
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return static::$state->getStatus();
    }
}
