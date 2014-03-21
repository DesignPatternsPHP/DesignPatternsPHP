<?php

namespace DesignPatterns\Status;

/**
 * Class OrderFactory
 */
class OrderFactory
{
    private function __construct()
    {
        throw Exception('Can not instance the OrderFactory class!');
    }

    /**
     * @param int $id
     *
     * @return CreateOrder|ShippingOrder
     * @throws \Exception
     */
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
