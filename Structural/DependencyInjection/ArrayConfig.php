<?php

namespace DesignPatterns\Structural\DependencyInjection;

/**
 * class ArrayConfig.
 *
 * uses array as data source
 */
class ArrayConfig extends AbstractConfig implements Parameters
{
    /**
     * Get parameter.
     *
     * @param string|int $key
     * @param null       $default
     *
     * @return mixed
     */
    public function get($key, $default = null)
    {
        if (isset($this->storage[$key])) {
            return $this->storage[$key];
        }

        return $default;
    }

    /**
     * Set parameter.
     *
     * @param string|int $key
     * @param mixed      $value
     */
    public function set($key, $value)
    {
        $this->storage[$key] = $value;
    }
}
