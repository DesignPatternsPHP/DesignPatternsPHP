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

    public function setState(StateOrder $state): void
    {
        $this->state = $state;
    }

    public function proceedToNext(): void
    {
        $this->state->proceedToNext($this);
    }

    public function toString(): string
    {
        return $this->state->toString();
    }
}
