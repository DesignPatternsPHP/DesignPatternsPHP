<?php
declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory;

interface Product
{
    public function calculatePrice(): int;
}
