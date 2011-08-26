<?php

namespace DesignPatterns;

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
    protected $_rowset;

    protected $_pathName;

    public function __construct($pathName)
    {
        $this->_rowset = new Rowset($this);
    }

    public function process()
    {
        $this->_rowset->process();
    }
}

class Rowset implements Iterator
{
    protected $_currentRow;

    protected $_file;

    public function __construct($file)
    {
        $this->_file = $file;
    }

    /**
     * composite pattern: run through all rows and process them
     *
     * @return void
     */
    public function process()
    {
        // this actually calls rewind(), { next(), valid(), key() and current() :}
        foreach ($this as $line => $row) {
            $row->process();
        }
    }

    public function rewind()
    {
        // seek to first line from $this->_file
    }

    public function next()
    {
        // read the next line from $this->_file
        if (!$eof) {
            $data = ''; // get the line
            $this->_currentRow = new Row($data);
        } else {
            $this->_currentRow = null;
        }
    }

    public function current()
    {
        return $this->_currentRow;
    }

    public function valid()
    {
        return null !== $this->_currentRow;
    }

    public function key()
    {
        // you would want to increment this in next() or whatsoever
        return $this->_lineNumber;
    }
}

class Row
{
    protected $_data;

    public function __construct($data)
    {
        $this->_data = $data;
    }

    public function process()
    {
        // do some fancy things here ...
    }
}