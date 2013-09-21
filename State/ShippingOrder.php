<?php

namespace DesignPatterns\Status;

/**
 * Class ShippingOrder
 */
class ShippingOrder implements OrderInterface
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
     * @return mixed|void
     * @throws \Exception
     */
    public function shipOrder()
    {
        //Can not ship the order which status is shipping, throw exception;
        throw new \Exception('Can not ship the order which status is shipping!');
    }

    /**
     * @return mixed
     */
    public function completeOrder()
    {
        $this->order['status'] = 'completed';
        $this->order['updatedTime'] = time();

        // Setting the new order status into database;
        return $this->updateOrder($order);
    }
}
