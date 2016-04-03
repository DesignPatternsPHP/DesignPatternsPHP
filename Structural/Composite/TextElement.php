<?php

namespace DesignPatterns\Structural\Composite;

/**
 * Class TextElement.
 */
class TextElement extends FormElement
{
    /**
     * renders the text element.
     *
     * @param int $indent
     *
     * @return mixed|string
     */
    public function render($indent = 0)
    {
        return str_repeat('  ', $indent).'this is a text element';
    }
}
