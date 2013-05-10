<?php

namespace DesignPatterns\Composite;

class TextElement extends FormElement
{
    public function render()
    {
        return 'this is a text element';
    }
}
