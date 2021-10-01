<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator;

abstract class BookingDecorator implements Booking
{
    public function __construct(protected Booking $booking)
    {
    }
}
