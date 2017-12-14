<?php

namespace DesignPatterns\Structural\Decorator;

interface RenderableInterface
{
    /**
     * @return string
     */
    public function renderData(): string;
}
