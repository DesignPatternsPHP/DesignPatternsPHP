<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator;

class DoubleRoomBooking implements Booking
{
    private const PRICE = 40;
    public function calculatePrice(): int
    {
        return self::PRICE;
    }

    public function getDescription(): string
    {
        return 'double room';
    }
}
