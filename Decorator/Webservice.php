<?php

namespace DesignPatterns\Decorator;

class Webservice implements Renderer
{
    protected $_data;

    public function __construct($data)
    {
        $this->_data = $data;
    }

    public function renderData()
    {
        return $this->_data;
    }
}
