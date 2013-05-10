<?php

namespace DesignPatterns\Composite;

class TextElement extends FormElement
{
    public function render($indent = 0)
    {
        return str_repeat('  ', $indent) . 'this is a text element';
    }
}
