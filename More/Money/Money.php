<?php

namespace DesignPatterns\More\Money;

use \Exception;

class Money
{
    /**
     * Money constructor.
     * @param $currency
     * @param $amount
     */
    private function __construct($currency, $amount)
    {
        $this->currency = $currency;
        $this->amount = $amount;
    }

    /**
     * Create money from string input
     *
     * @param $currency
     * @param $amount
     * @return Money
     */
    public static function fromString($currency, $amount): Money
    {
        return new Money($currency, $amount);
    }

    /**
     * Return money represented as currency + amount
     *
     * @return string
     */
    public function __toString(): String
    {
        return $this->amount . "" . $this->currency;
    }

    /**
     * Get only amount
     *
     * @return mixed
     */
    private function getAmount()
    {
        return $this->amount;
    }

    /**
     * Get currency
     *
     * @return mixed
     */
    private function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Subtract money instances (as value objects)
     *
     * @param Money $money
     * @return Money
     * @throws Exception
     */
    public function add(Money $money)
    {
        if ($money->getCurrency() != $this->getCurrency()) {
            throw new Exception('Money should have equal currencies');
        }
        return new Money($money->getCurrency(), $money->getAmount() + $this->getAmount());
    }

    /**
     * Compare by value
     *
     * @param Money $money
     * @return bool
     */
    public function equals(Money $money): bool
    {
        return $this->getAmount() == $money->getAmount();
    }

    /**
     * More user friendly interface for creating money
     *
     * @param $method
     * @param $args
     * @return Money
     */
    public static function __callStatic($method, $args): Money
    {
        return Money::fromString($method, $args[0]);
    }
}
