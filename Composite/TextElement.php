<?php

namespace DesignPatterns\Composite;

class TextElement extends FormElement
{
    public function render($indent = 0)
    {
        return 'this is a text element';
    }
}
