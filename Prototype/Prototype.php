<?php

namespace DesignPatterns;

/**
 * Prototype pattern
 *
 * Purpose:
 * to avoid the cost of creating objects the standard way (new Foo()) and instead create a prototype and clone it
 *
 * Examples:
 * - Large amounts of data (e.g. create 1,000,000 rows in a database at once via a ORM)
 *
 */
abstract class BookPrototype
{
    protected $_title;
    protected $_category;

    /**
     * @abstract
     * @return void
     */
    abstract function __clone();

    public function getTitle()
    {
        return $this->_title;
    }

    public function setTitle($title)
    {
        $this->_title = $title;
    }
}

class FooBookPrototype extends BookPrototype
{
    protected $_category = 'Foo';

    public function __clone()
    {
        
    }
}

class BarBookPrototype extends BookPrototype
{
    protected $_category = 'Bar';


    public function __clone()
    {
        
    }
}

$fooPrototype = new FooBookPrototype();
$barPrototype = new BarBookPrototype();

// now lets say we need 10,000 books of foo and 5,000 of bar ...
for ($i = 0; $i < 10000; $i++) {
    $book = clone $fooPrototype;
    $book->setTitle('Foo Book No ' . $i);
}