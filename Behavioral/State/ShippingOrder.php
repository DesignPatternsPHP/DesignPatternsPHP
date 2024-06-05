<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\State;

class ShippingOrder implements StateOrder
{
    public function proceedToNext(ContextOrder $context): void
    {
        $context->setState(new OrderDone());
    }

    public function toString(): string
    {
        return 'shipped';
    }
}
