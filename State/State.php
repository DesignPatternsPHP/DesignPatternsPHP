<?php

namespace DesignPatterns\Status;

/**
 * The order has two status: created, shipping, completed.
 * When the order's status is created, what can do is just 'shipping' handle;
 * When the order's status is shipping, what can do is just 'completed' handle;
 *
 */
interface OrderInterface
{
    /**
     * @return mixed
     */
    public function shipOrder();

    /**
     * @return mixed
     */
    public function completeOrder();
}

/**
 * Class CreateOrder
 */
class CreateOrder implements OrderInterface
{
    /**
     * @var array
     */
    private $order;

    /**
     * @param array $order
     */
    public function __construct(array $order)
    {
        if (empty($order)) {
            throw new \Exception('Order can not be empty!');
        }
        $this->order = $order;
    }

    public function shipOrder()
    {
        $this->order['status'] = 'shipping';
        $this->order['updatedTime'] = time();

        // Setting the new order status into database;
        return $this->updateOrder($order);
    }

    public function completeOrder()
    {
        //Can not complete the order which status is created, throw exception;
        throw new \Exception('Can not complete the order which status is created!');
    }
}

class ShippingOrder implements OrderInterface
{

    private $order;

    public function __construct(array $order)
    {
        if (empty($order)) {
            throw new \Exception('Order can not be empty!');
        }
        $this->order = $order;
    }

    public function shipOrder()
    {
        //Can not ship the order which status is shipping, throw exception;
        throw new \Exception('Can not ship the order which status is shipping!');
    }

    public function completeOrder()
    {
        $this->order['status'] = 'completed';
        $this->order['updatedTime'] = time();

        // Setting the new order status into database;
        return $this->updateOrder($order);
    }
}

class OrderFactory
{

    private function __construct()
    {
        throw Exception('Can not instance the OrderFactory class!');
    }

    public static function getOrder($id)
    {
        $order = 'Get Order From Database';

        switch ($order['status']) {
            case 'created':
                return new CreateOrder($order);
            case 'shipping':
                return new ShippingOrder($order);
            default:
                throw new \Exception('Order status error!');
                break;
        }
    }
}


// Client

class OrderController
{
    /**
     * @param int $id
     */
    public function shipAction($id)
    {
        $order = OrderFactory::getOrder($id);
        try {
            $order->shipOrder($id);
        } catch (Exception $e) {
            //handle error!
        }
        // response to browser
    }

    public function completeAction($id)
    {
        $order = OrderFactory::getOrder($id);
        try {
            $order->completeOrder($id);
        } catch (Exception $e) {
            //handle error!
        }
        // response to browser
    }
}
