<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\AbstractFactory\Html;

use DesignPatterns\AbstractFactory\Picture as BasePicture;

/**
 * Picture is a concrete image for HTML rendering
 */
class Picture extends BasePicture
{

    // some crude rendering from HTML output
    public function render()
    {
        return sprintf('<img src="%s" title="$s"/>', $this->_path, $this->_name);
    }

}