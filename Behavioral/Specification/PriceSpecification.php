<?php

namespace DesignPatterns\Behavioral\Specification;

class PriceSpecification implements SpecificationInterface
{
    /**
     * @var float|null
     */
    private $maxPrice;

    /**
     * @var float|null
     */
    private $minPrice;

    /**
     * @param float $minPrice
     * @param float $maxPrice
     */
    public function __construct($minPrice, $maxPrice)
    {
        $this->minPrice = $minPrice;
        $this->maxPrice = $maxPrice;
    }

    /**
     * @param Item $item
     *
     * @return bool
     */
    public function isSatisfiedBy(Item $item): bool
    {
        if (null !== $this->maxPrice && $item->getPrice() > $this->maxPrice) {
            return false;
        }

        if (null !== $this->minPrice && $item->getPrice() < $this->minPrice) {
            return false;
        }

        return true;
    }
}
