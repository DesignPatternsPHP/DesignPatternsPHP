<?php

namespace DesignPatterns\Behavioral\Iterator;

class BookListIterator implements \Iterator
{
    /**
     * @var BookList
     */
    private $bookList;

    /**
     * @var int
     */
    protected $currentBook = 0;

    public function __construct(BookList $bookList)
    {
        $this->bookList = $bookList;
    }

    /**
     * Return the current book.
     *
     * @link http://php.net/manual/en/iterator.current.php
     *
     * @return Book Can return any type.
     */
    public function current()
    {
        return $this->bookList->getBook($this->currentBook);
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Move forward to next element.
     *
     * @link http://php.net/manual/en/iterator.next.php
     *
     * @return void Any returned value is ignored.
     */
    public function next()
    {
        $this->currentBook++;
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Return the key of the current element.
     *
     * @link http://php.net/manual/en/iterator.key.php
     *
     * @return mixed scalar on success, or null on failure.
     */
    public function key()
    {
        return $this->currentBook;
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Checks if current position is valid.
     *
     * @link http://php.net/manual/en/iterator.valid.php
     *
     * @return bool The return value will be casted to boolean and then evaluated.
     *              Returns true on success or false on failure.
     */
    public function valid()
    {
        return null !== $this->bookList->getBook($this->currentBook);
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Rewind the Iterator to the first element.
     *
     * @link http://php.net/manual/en/iterator.rewind.php
     *
     * @return void Any returned value is ignored.
     */
    public function rewind()
    {
        $this->currentBook = 0;
    }
}
