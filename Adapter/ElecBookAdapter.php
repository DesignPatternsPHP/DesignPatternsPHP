<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\Adapter;

/**
 * ElecBookAdapter is an adapter to fit an e-book like a paper book
 * 
 * This is the adapter here. Notice it implemennts PaperBookInterface,
 * therefore you don't have to change the code of the client which using paper book.
 */
class ElecBookAdapter implements PaperBookInterface
{

    protected $eBook;

    /**
     * Notice the constructor, it "wraps" an electronic book
     */
    public function __construct(ElecBookInterface $ebook)
    {
        $this->eBook = $ebook;
    }

    /**
     * This cass makes the proper translation from one interface to another
     */
    public function open()
    {
        $this->eBook->pressStart();
    }

    public function turnPage()
    {
        $this->eBook->pressNext();
    }

}