<?php

namespace DesignPatterns\Composite;

class InputElement extends FormElement
{
    public function render()
    {
        return '<input type="text" />';
    }
}
