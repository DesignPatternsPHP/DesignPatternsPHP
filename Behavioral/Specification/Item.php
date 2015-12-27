<?php

namespace DesignPatterns\Behavioral\Specification;

/**
 * An trivial item.
 */
class Item
{
    protected $price;

    /**
     * An item must have a price.
     *
     * @param int $price
     */
    public function __construct($price)
    {
        $this->price = $price;
    }

    /**
     * Get the items price.
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }
}
