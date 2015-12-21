<?php

namespace DesignPatterns\Behavioral\State;

/**
 * Class OrderFactory.
 */
class OrderFactory
{
    private function __construct()
    {
        throw new \Exception('Can not instance the OrderFactory class!');
    }

    /**
     * @param int $id
     *
     * @throws \Exception
     *
     * @return CreateOrder|ShippingOrder
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
