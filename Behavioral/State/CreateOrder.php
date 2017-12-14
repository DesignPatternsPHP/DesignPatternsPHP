<?php

namespace DesignPatterns\Behavioral\State;

class CreateOrder extends StateOrder
{
    public function __construct()
    {
        $this->setStatus('created');
    }

    /**
     * @return mixed|void
     */
    protected function done()
    {
        static::$state = new ShippingOrder();
    }
}
