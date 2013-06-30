<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\Iterator;

/**
 * Iterator provides a standard way to iterate over a collection without knowing
 * how it is implemented. All you need to know is : you can traverse it
 * with current, valid, next, rewind and key.
 * 
 * That's the key feature of this pattern :
 * The underlaying machinery could be an array, a matrix, a file, a cursor
 * from database, a webservice with a cache, you don't care anymore.
 * 
 * Note: This design pattern changes from one language to another. It depends 
 * mostly how loop statements handle collections (see Java before and after 1.5)
 * 
 * In this simple example, I try to demonstrate how I manage a "linear" iterator
 * on a card game but in fact, the underlaying storage is handled by two combined
 * arrays.
 * 
 * If tomorrow you decide to read cards from a database, the client 
 * (see the PHPUnit test) will remain unchanged. That's the beauty of it.
 */
class CardGame implements \Iterator
{

    protected $color = array('D', 'S', 'C', 'H');
    protected $number = array(7, 8, 9, 10, 'J', 'Q', 'K', 'A');

    /**
     * Return the current value
     */
    public function current()
    {
        return current($this->number) . ' of ' . current($this->color);
    }

    /**
     * Return the current key
     */
    public function key()
    {
        return current($this->color) . current($this->number);
    }

    /**
     * Go to the next item in the collection
     */
    public function next()
    {
        if (false === next($this->number)) {
            if (false !== next($this->color)) {
                reset($this->number);
            }
        }
    }

    /**
     * Go to the first item in the collection
     */
    public function rewind()
    {
        reset($this->color);
        reset($this->number);
    }

    /**
     * Is the current position a valid item (true) 
     * or do we reach the end (false) ?
     */
    public function valid()
    {
        return current($this->number) || current($this->color);
    }

}