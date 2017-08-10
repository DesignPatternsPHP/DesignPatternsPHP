<?php

namespace DesignPatterns\Behavioral\State;

class CreateOrder extends StateOrder
{
    /**
     * CreateOrder constructor.
     */
    public function __construct()
    {
        $this->setStatus('created');
    }

    protected function done()
    {
        static::$state = new ShippingOrder();
    }
}
