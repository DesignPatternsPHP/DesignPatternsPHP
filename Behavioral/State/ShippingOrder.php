<?php

namespace DesignPatterns\Behavioral\State;

class ShippingOrder extends StateOrder
{
    /**
     * ShippingOrder constructor.
     */
    public function __construct()
    {
        $this->setStatus('shipping');
    }

    protected function done()
    {
        $this->setStatus('completed');
    }
}
