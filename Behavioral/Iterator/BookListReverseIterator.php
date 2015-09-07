<?php

namespace DesignPatterns\Behavioral\Iterator;

class BookListReverseIterator extends BookListIterator
{

    public function __construct(BookList $bookList)
    {
        $this->bookList = $bookList;
        $this->currentBook = $this->bookList->count() - 1;
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Move forward to next element
     * @link http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     */
    public function next()
    {
        $this->currentBook--;
    }
}
