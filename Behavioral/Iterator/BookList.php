<?php

namespace DesignPatterns\Behavioral\Iterator;

class BookList implements \Countable, \Iterator
{
    /**
     * @var Book[]
     */
    private $books;

    /**
     * @var int
     */
    private $currentIndex = 0;

    public function addBook(Book $book)
    {
        $this->books[] = $book;
    }

    public function removeBook(Book $bookToRemove)
    {
        foreach ($this->books as $key => $book) {
            /** @var Book $book */
            if ($book->getAuthorAndTitle() === $bookToRemove->getAuthorAndTitle()) {
                unset($this->books[$key]);
            }
        }
    }

    public function count(): int
    {
        return count($this->books);
    }

    public function current(): Book
    {
        return $this->books[array_keys($this->books)[$this->currentIndex]];
    }

    public function key(): int
    {
        return array_keys($this->books)[$this->currentIndex];
    }

    public function next()
    {
        $this->currentIndex++;
    }

    public function rewind()
    {
        $this->currentIndex = 0;
    }

    public function valid(): bool
    {
        return isset(array_keys($this->books)[$this->currentIndex]);
    }
}
