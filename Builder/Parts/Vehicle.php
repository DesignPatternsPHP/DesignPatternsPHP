<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\Builder\Parts;

/**
 * Vehicle is a contract for a vehicle
 */
abstract class Vehicle
{

    protected $data;

    public function setPart($key, $value)
    {
        $this->data[$key] = $value;
    }

}