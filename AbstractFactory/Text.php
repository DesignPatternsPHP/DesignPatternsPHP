<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dominik
 * Date: 21.08.11
 * Time: 15:42
 * To change this template use File | Settings | File Templates.
 */

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
