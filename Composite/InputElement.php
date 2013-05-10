<?php

namespace DesignPatterns\Composite;

class InputElement extends FormElement
{
    public function render($indent = 0)
    {
        return '<input type="text" />';
    }
}
