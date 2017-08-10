<?php

namespace DesignPatterns\Structural\Composite;

interface RenderableInterface
{
    /**
     * @return string
     */
    public function render(): string;
}
