<?php

namespace DesignPatterns\Structural\DependencyInjection;

/**
 * Parameters interface.
 */
interface Parameters
{
    /**
     * Get parameter.
     *
     * @param string|int $key
     *
     * @return mixed
     */
    public function get($key);

    /**
     * Set parameter.
     *
     * @param string|int $key
     * @param mixed      $value
     */
    public function set($key, $value);
}
