<?php

namespace DesignPatterns\Structural\Adapter;

/**
 * EBookAdapter is an adapter to fit an e-book like a paper book.
 *
 * This is the adapter here. Notice it implements PaperBookInterface,
 * therefore you don't have to change the code of the client which using paper book.
 */
class EBookAdapter implements PaperBookInterface
{
    /**
     * @var EBookInterface
     */
    protected $eBook;

    /**
     * Notice the constructor, it "wraps" an electronic book.
     *
     * @param EBookInterface $ebook
     */
    public function __construct(EBookInterface $ebook)
    {
        $this->eBook = $ebook;
    }

    /**
     * This class makes the proper translation from one interface to another.
     */
    public function open()
    {
        $this->eBook->pressStart();
    }

    /**
     * turns pages.
     */
    public function turnPage()
    {
        $this->eBook->pressNext();
    }
}
