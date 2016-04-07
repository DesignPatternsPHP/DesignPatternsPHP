<?php

namespace DesignPatterns\Structural\Composite;

/**
 * Class InputElement.
 */
class InputElement extends FormElement
{
    /**
     * renders the input element HTML.
     *
     * @param int $indent
     *
     * @return mixed|string
     */
    public function render($indent = 0)
    {
        return str_repeat('  ', $indent).'<input type="text" />';
    }
}
