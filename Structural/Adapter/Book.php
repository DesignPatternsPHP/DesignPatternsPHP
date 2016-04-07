<?php

namespace DesignPatterns\Structural\Adapter;

/**
 * Book is a concrete and standard paper book.
 */
class Book implements PaperBookInterface
{
    /**
     * {@inheritdoc}
     */
    public function open()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function turnPage()
    {
    }
}
