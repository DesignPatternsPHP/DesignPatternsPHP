<?php

namespace DesignPatterns\Structural\Decorator;

class JsonRenderer extends RendererDecorator
{
    public function renderData(): string
    {
        return json_encode($this->wrapped->renderData());
    }

    /**
     * Renders data as JSON based on options passed.
     * In terms of decorator patters, it represents additional extended behaviour.
     *
     * @param int $options Options to be used to encode data into JSON.
     * @return string Rendered output
     */
    public function renderDataWithOptions($options = 0): string
    {
        return json_encode($this->wrapped->renderData(), $options);
    }
}
