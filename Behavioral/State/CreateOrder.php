<?php

namespace DesignPatterns\Behavioral\State;

/**
 * Class CreateOrder.
 */
class CreateOrder implements OrderInterface
{
    /**
     * @var array
     */
    private $order;

    /**
     * @param array $order
     *
     * @throws \Exception
     */
    public function __construct(array $order)
    {
        if (empty($order)) {
            throw new \Exception('Order can not be empty!');
        }
        $this->order = $order;
    }

    /**
     * @return mixed
     */
    public function shipOrder()
    {
        $this->order['status'] = 'shipping';
        $this->order['updatedTime'] = time();

        // Setting the new order status into database;
        return $this->updateOrder($this->order);
    }

    /**
     * @throws \Exception
     *
     * @return mixed|void
     */
    public function completeOrder()
    {
        //Can not complete the order which status is created, throw exception;
        throw new \Exception('Can not complete the order which status is created!');
    }
}
