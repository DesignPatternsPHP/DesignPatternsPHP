<?php

namespace DesignPatterns\Behavioral\State;

interface Order
{
    /**
     * @return mixed
     */
    public function shipOrder();

    /**
     * @return mixed
     */
    public function completeOrder();

    public function getStatus(): string;
}
