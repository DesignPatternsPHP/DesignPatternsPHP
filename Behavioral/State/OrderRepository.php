<?php

namespace DesignPatterns\Behavioral\State;

class OrderRepository
{
    /**
     * @var array
     */
    private static $orders = [
        1 => ['status' => 'created'],
        2 => ['status' => 'shipping'],
        3 => ['status' => 'completed'],
    ];

    public static function findById(int $id): Order
    {
        if (!isset(self::$orders[$id])) {
            throw new \InvalidArgumentException(sprintf('Order with id %d does not exist', $id));
        }

        $order = self::$orders[$id];

        switch ($order['status']) {
            case 'created':
                return new CreateOrder($order);
            case 'shipping':
                return new ShippingOrder($order);
            default:
                throw new \InvalidArgumentException('Invalid order status given');
                break;
        }
    }
}
