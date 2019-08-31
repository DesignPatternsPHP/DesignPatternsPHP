<?php declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory;

class ShippableProduct implements Product
{
    /**
     * @var int
     */
    private $productPrice;

    /**
     * @var int
     */
    private $shippingCosts;

    public function __construct(int $productPrice, int $shippingCosts)
    {
        $this->productPrice = $productPrice;
        $this->shippingCosts = $shippingCosts;
    }

    public function calculatePrice(): int
    {
        return $this->productPrice + $this->shippingCosts;
    }
}
