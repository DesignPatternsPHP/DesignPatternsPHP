<?php

namespace DesignPatterns\Creational\Builder\Parts;

/**
 * Vehicle class is an abstraction for a vehicle.
 */
abstract class Vehicle
{
    /**
     * @var array
     */
    protected $data;

    /**
     * @param string $key
     * @param mixed  $value
     */
    public function setPart($key, $value)
    {
        $this->data[$key] = $value;
    }
}
