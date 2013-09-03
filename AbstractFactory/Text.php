<?php

namespace DesignPatterns\AbstractFactory;

/**
 * Class Text
 *
 * @package DesignPatterns\AbstractFactory
 */
abstract class Text implements Media
{
    /**
     * @var string
     */
    protected $text;

    /**
     * @param string $text
     */
    public function __construct($text)
    {
        $this->_text = (string) $text;
    }
}
