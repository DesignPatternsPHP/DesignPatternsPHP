<?php

namespace DesignPatterns\Behavioral\Specification;

/**
 * A specification to check an Item is priced between min and max.
 */
class PriceSpecification extends AbstractSpecification
{
    protected $maxPrice;
    protected $minPrice;

    /**
     * Sets the optional maximum price.
     *
     * @param int $maxPrice
     */
    public function setMaxPrice($maxPrice)
    {
        $this->maxPrice = $maxPrice;
    }

    /**
     * Sets the optional minimum price.
     *
     * @param int $minPrice
     */
    public function setMinPrice($minPrice)
    {
        $this->minPrice = $minPrice;
    }

    /**
     * Checks if Item price falls between bounds.
     *
     * @param Item $item
     *
     * @return bool
     */
    public function isSatisfiedBy(Item $item)
    {
        if (!empty($this->maxPrice) && $item->getPrice() > $this->maxPrice) {
            return false;
        }
        if (!empty($this->minPrice) && $item->getPrice() < $this->minPrice) {
            return false;
        }

        return true;
    }
}
