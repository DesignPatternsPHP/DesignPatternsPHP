<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\Specification;

class Item
{
    private float $price;

    public function __construct(float $price)
    {
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}
