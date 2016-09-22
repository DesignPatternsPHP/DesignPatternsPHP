<?php

namespace DesignPatterns\Structural\Decorator;

class RenderInJson extends Decorator
{
    /**
     * render data as JSON.
     *
     * @return string
     */
    public function renderData()
    {
        return json_encode($this->wrapped->renderData());
    }
}
