<?php

namespace DesignPatterns\Behavioral\State;

/**
 * Class OrderController.
 */
class OrderController
{
    /**
     * @param int $id
     */
    public function shipAction($id)
    {
        $order = OrderFactory::getOrder($id);
        try {
            $order->shipOrder();
        } catch (Exception $e) {
            //handle error!
        }
        // response to browser
    }

    /**
     * @param int $id
     */
    public function completeAction($id)
    {
        $order = OrderFactory::getOrder($id);
        try {
            $order->completeOrder();
        } catch (Exception $e) {
            //handle error!
        }
        // response to browser
    }
}
