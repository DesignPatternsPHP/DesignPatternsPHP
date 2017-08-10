<?php

namespace DesignPatterns\Structural\Decorator;

class Webservice implements RenderableInterface
{
    /**
     * @var string
     */
    private $data;

    /**
     * Webservice constructor.
     * @param string $data
     */
    public function __construct(string $data)
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function renderData(): string
    {
        return $this->data;
    }
}
