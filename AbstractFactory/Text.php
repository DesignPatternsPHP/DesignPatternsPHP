<?php

namespace DesignPatterns\AbstractFactory;

abstract class Text implements Media
{
    /**
     * 
     * @var string
     */
    protected $_text;

    public function __construct($text)
    {
        $this->_text = $text;
    }
}
