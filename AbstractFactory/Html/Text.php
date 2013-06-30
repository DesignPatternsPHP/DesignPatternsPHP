<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\AbstractFactory\Html;

use DesignPatterns\AbstractFactory\Text as BaseText;

/**
 * Text is a concrete text for HTML rendering
 */
class Text extends BaseText
{

    public function render()
    {
        return "<div>" . htmlspecialchars($this->_text) . '</div>';
    }

}