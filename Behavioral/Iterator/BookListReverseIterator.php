<?php

namespace DesignPatterns\Behavioral\Iterator;

class BookListReverseIterator extends BookListIterator
{

    public function __construct(BookList $bookList)
    {
        $this->bookList = $bookList;
        $this->currentBook = $this->bookList->count() - 1;
    }

    public function next()
    {
        $this->currentBook--;
    }

    public function valid()
    {
        return 0 <= $this->currentBook;
    }
}