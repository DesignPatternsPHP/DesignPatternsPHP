<?php

namespace DesignPatterns\Behavioral\State;

class CreateOrder implements Order
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
        $this->details['status'] = 'shipping';
        $this->details['updatedTime'] = time();
    }

    public function completeOrder()
    {
        throw new \Exception('Can not complete the order which status is created');
    }

    public function getStatus(): string
    {
        return $this->details['status'];
    }
}
