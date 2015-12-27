<?php

namespace DesignPatterns\Structural\Composite;

/**
 * Class FormElement.
 */
abstract class FormElement
{
    /**
     * renders the elements' code.
     *
     * @param int $indent
     *
     * @return mixed
     */
    abstract public function render($indent = 0);
}
