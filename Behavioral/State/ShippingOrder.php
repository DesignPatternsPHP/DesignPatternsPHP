<?php

namespace DesignPatterns\Behavioral\State;

class ShippingOrder implements Order
{
    /**
     * @var array
     */
    private $details;

    /**
     * @param array $details
     */
    public function __construct(array $details)
    {
        $this->details = $details;
    }

    public function shipOrder()
    {
        throw new \Exception('Can not ship the order which status is shipping!');
    }

    public function completeOrder()
    {
        $this->details['status'] = 'completed';
        $this->details['updatedTime'] = time();
    }

    public function getStatus(): string
    {
        return $this->details['status'];
    }
}
