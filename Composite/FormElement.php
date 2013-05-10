<?php

namespace DesignPatterns\Composite;

abstract class FormElement
{
    abstract public function render($indent = 0);
}
