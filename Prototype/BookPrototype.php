<?php

namespace DesignPatterns\Prototype;

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
    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $category;

    /**
     * @abstract
     * @return void
     */
    abstract public function __clone();

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
}
