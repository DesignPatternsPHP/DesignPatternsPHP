<?php

namespace DesignPatterns\Iterator;

/**
 * iterator pattern
 *
 * Purpose:
 * to make an object iterable
 *
 * Examples:
 * - to process a file line by line by just running over all lines (which have an object representation) for a file
 *   (which of course is an object, too)
 *
 * Note:
 * Standard PHP Library (SPL) defines an interface Iterator which is best suited for this!
 * Often you would want to implement the Countable interface too, to allow count($object) on your iterable object
 *
 * THIS EXAMPLE ALSO APPLIES THE COMPOSITE PATTERN
 *
 */
class File
{
    /**
     * @var RowSet
     */
    protected $rowSet;

    /**
     * @var string
     */
    protected $pathName;

    /**
     * @param string $pathName
     */
    public function __construct($pathName)
    {
        $this->rowSet = new Rowset($this);
    }

    /**
     * processes the rowSet
     */
    public function process()
    {
        // this is the place to show how using an iterator, with foreach
        // See the CardGame.php file
        $this->rowSet->process();
    }
}
