<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\State;

interface StateOrder
{
    public function proceedToNext(ContextOrder $context);

    public function toString(): string;
}
