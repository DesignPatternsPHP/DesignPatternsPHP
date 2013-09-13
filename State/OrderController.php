<?php

namespace DesignPatterns\Status;

/**
 * Class OrderController
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
            $order->shipOrder($id);
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
            $order->completeOrder($id);
        } catch (Exception $e) {
            //handle error!
        }
        // response to browser
    }
}
