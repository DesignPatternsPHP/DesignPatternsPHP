<?php

namespace DesignPatterns\Status;

/**
 * Class OrderInterface
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
