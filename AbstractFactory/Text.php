<?php

namespace DesignPatterns\AbstractFactory;

class Text implements Media
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
