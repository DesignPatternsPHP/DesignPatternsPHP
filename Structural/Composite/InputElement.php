<?php

namespace DesignPatterns\Structural\Composite;

class InputElement implements RenderableInterface
{
    public function render(): string
    {
        return '<input type="text" />';
    }
}
