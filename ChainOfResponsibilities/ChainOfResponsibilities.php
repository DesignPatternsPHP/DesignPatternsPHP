<?php

namespace DesignPatterns;

/**
 * chain of responsibilities pattern
 *
 * Purpose:
 * to build a chain of objects to handle a call. if one object cannot handle a call, it delegates the call to the next
 * in the chain and so forth
 *
 * Examples:
 * - Caching: first object is an instance of e.g. a Memcached Interface, if that "misses" it delegates the call to the
 *   Database Interface
 * - Yii Framework: CFilterChain is a chain of controller action filters. the executing point is passed from one filter
 *   to the next along the chain, and only if all filters say "yes", the action can be invoked at last.
 *
 */

interface KeyValueStorage
{
    public function get($key);
}

class SlowStorage implements KeyValueStorage
{
    protected $_data = array();

    public function __construct($data = array())
    {
        $this->_data = $data;
    }

    /**
     * this class has no next handler, so it MUST be able to handle all requests
     *
     * @param $key
     * @return mixed
     */
    public function get($key)
    {
        return $this->_data[$key];
    }
}

class FastStorage implements KeyValueStorage
{
    /**
     * @var array
     */
    protected $_data;

    /**
     * the next handler in the chain
     *
     * @var \DesignPatterns\KeyValueStorage
     */
    protected $_nextHandler;

    public function __construct(array $data, KeyValueStorage $nextHandler)
    {
        $this->_data = $data;
        $this->_nextHandler = $nextHandler;
    }

    /**
     * when this storage gets a "miss", search in next handler
     *
     * @param $key
     * @return mixed
     */
    public function get($key)
    {
        if (true /* miss */) {
            // delegate the call to the next handler in the chain
            return $this->_nextHandler->get($key);
        }
    }
}

// BUILD THE STORAGES AND CHAIN

$slowStorage = new SlowStorage(array('foo' => 'bar'));
$fastStorage = new FastStorage(array('bar' => 'baz'), $slowStorage);

$fastStorage->get('foo'); // will be handled by SlowStorage
$fastStorage->get('bar'); // will be handled by FastStorage

/**
 * In this example we could also add a abstract class and extend it to build Fast- and SlowStorage. That class would
 * then manage the chain and when the cache hits a "miss", it would check if there is a next handler
 */