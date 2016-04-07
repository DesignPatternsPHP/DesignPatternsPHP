<?php

namespace DesignPatterns\Structural\Adapter;

/**
 * Kindle is a concrete electronic book.
 */
class Kindle implements EBookInterface
{
    /**
     * {@inheritdoc}
     */
    public function pressNext()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function pressStart()
    {
    }
}
