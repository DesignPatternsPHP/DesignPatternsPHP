<?php

namespace DesignPatterns\Structural\Adapter;

/**
 * PaperBookInterface is a contract for a book.
 */
interface PaperBookInterface
{
    /**
     * method to turn pages.
     *
     * @return mixed
     */
    public function turnPage();

    /**
     * method to open the book.
     *
     * @return mixed
     */
    public function open();
}
