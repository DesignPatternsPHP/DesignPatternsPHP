<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\State;

class OrderDone implements StateOrder
{
    public function proceedToNext(ContextOrder $context)
    {
        // there is nothing more to do
    }

    public function toString(): string
    {
        return 'done';
    }
}
