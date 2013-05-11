<?php

namespace DesignPatterns\Decorator;

class RenderInJson extends Decorator
{

    public function renderData()
    {
        $output = $this->_wrapped->renderData();
        return json_encode($output);
    }

}
