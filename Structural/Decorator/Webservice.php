<?php

namespace DesignPatterns\Structural\Decorator;

class Webservice implements RendererInterface
{
    /**
     * @var mixed
     */
    protected $data;

    /**
     * @param mixed $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function renderData()
    {
        return $this->data;
    }
}
