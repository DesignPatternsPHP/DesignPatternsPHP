<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\State;

class CreateOrder implements StateOrder
{
    public function proceedToNext(ContextOrder $context): void
    {
        $context->setState(new ShippingOrder());
    }

    public function toString(): string
    {
        return 'created';
    }
}
