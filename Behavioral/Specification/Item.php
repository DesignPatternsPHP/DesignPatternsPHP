<?php

namespace DesignPatterns\Behavioral\Specification;

class Item
{
    /**
     * @var float
     */
    private $price;

    /**
     * Item constructor.
     * @param float $price
     */
    public function __construct(float $price)
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
}
