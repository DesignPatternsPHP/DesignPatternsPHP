<?php

namespace DesignPatterns\AbstractFactory;

abstract class Picture implements Media
{
    protected $_path;
    protected $_name;

    /**
     *
     * @param string $path
     * @param string $name
     */
    public function __construct($path, $name = '')
    {
        $this->_name = (string) $name;
        $this->_path = (string) $path;
    }
}
