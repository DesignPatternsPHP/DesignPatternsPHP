<?php

namespace DesignPatterns\AbstractFactory\Html;

use DesignPatterns\AbstractFactory\Picture as BasePicture;

/**
 * Class Picture
 *
 * Picture is a concrete image for HTML rendering
 *
 * @package DesignPatterns\AbstractFactory\Html
 */
class Picture extends BasePicture
{

    /**
     * some crude rendering from HTML output
     *
     * @return string
     */
    public function render()
    {
        return sprintf('<img src="%s" title="$s"/>', $this->_path, $this->_name);
    }

}