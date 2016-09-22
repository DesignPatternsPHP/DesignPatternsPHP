<?php

namespace DesignPatterns\Behavioral\State;

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
