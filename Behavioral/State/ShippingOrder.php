<?php

namespace DesignPatterns\Behavioral\State;

class ShippingOrder extends StateOrder
{
    public function __construct()
    {
        $this->setStatus('shipping');
    }

    /**
     * @return mixed|void
     */
    protected function done()
    {
        $this->setStatus('completed');
    }
}
