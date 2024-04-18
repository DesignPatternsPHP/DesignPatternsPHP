<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\State;

class ContextOrder
{
    private StateOrder $state;

    public static function create(): ContextOrder
    {
        $order = new self();
        $order->state = new CreateOrder();

        return $order;
    }

    public function setState(StateOrder $state)
    {
        $this->state = $state;
    }

    public function proceedToNext()
    {
        $this->state->proceedToNext($this);
    }

    public function toString()
    {
        return $this->state->toString();
    }
}
