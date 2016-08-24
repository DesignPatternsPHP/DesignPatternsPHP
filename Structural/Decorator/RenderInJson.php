<?php

namespace DesignPatterns\Structural\Decorator;

/**
 * Class RenderInJson.
 */
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
