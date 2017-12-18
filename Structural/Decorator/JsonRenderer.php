<?php

namespace DesignPatterns\Structural\Decorator;

class JsonRenderer extends RendererDecorator
{
    /**
     * @return string
     */
    public function renderData(): string
    {
        return json_encode($this->wrapped->renderData());
    }
}
