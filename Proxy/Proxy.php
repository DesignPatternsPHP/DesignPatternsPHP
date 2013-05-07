<?php

namespace DesignPatterns;

/**
 * Proxy pattern
 *
 * Purpose:
 * to interface to anything that is expensive or impossible to duplicate
 *
 * Examples:
 * - Doctrine2 uses proxies to implement framework magic (e.g. Lazy initialization) in them, while the user still works
 *   with his own entity classes and will never use nor touch the proxies
 *
 */
class Record
{
    protected $_data;

    public function __construct($data = null)
    {
        $this->_data = $data;
    }

    /**
     * magic setter
     *
     * @param string $name
     * @param mixed $value
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

class RecordProxy extends Record
{
    /**
     * @var bool
     */
    protected $_isDirty = false;

    /**
     * @var bool
     */
    protected $_isInitialized = false;

    /**
     * @param array
     */
    public function __construct($data)
    {
        parent::__construct($data);

        // when the record has data, mark it as initialized
        // since Record will hold our business logic, we don't want to
        // implement this behaviour there, but instead in a new proxy class
        // that extends the Record class
        if (null !== $data) {
            $this->_isInitialized = true;
            $this->_isDirty = true;
        }
    }

    /**
     * magic setter
     *
     * @param string $name
     * @param mixed $value
     * @return void
     */
    public function __set($name, $value)
    {
        $this->_isDirty = true;
        parent::__set($name, $value);
    }
}
