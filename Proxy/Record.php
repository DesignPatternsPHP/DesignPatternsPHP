<?php

namespace DesignPatterns\Proxy;

/**
 * Proxy pattern
 *
 * Purpose:
 * to interface to anything that is expensive or impossible to duplicate
 *
 * Examples:
 * - Doctrine2 uses proxies to implement framework magic (e.g. lazy initialization) in them, while the user still works
 *   with his own entity classes and will never use nor touch the proxies
 *
 */
class Record
{
    /**
     * @var array|null
     */
    protected $_data;

    /**
     * @param null $data
     */
    public function __construct($data = null)
    {
        $this->_data = (array) $data;
    }

    /**
     * magic setter
     *
     * @param string $name
     * @param mixed  $value
     *
     * @return void
     */
    public function __set($name, $value)
    {
        $this->_data[(string) $name] = $value;
    }

    /**
     * magic getter
     *
     * @param string $name
     *
     * @return mixed|null
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->_data)) {
            return $this->_data[(string) $name];
        } else {
            return null;
        }
    }
}
