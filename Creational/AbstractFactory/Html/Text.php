<?php

namespace DesignPatterns\Creational\AbstractFactory\Html;

use DesignPatterns\Creational\AbstractFactory\Text as BaseText;

class Text extends BaseText
{
    /**
     * some crude rendering from HTML output.
     *
     * @return string
     */
    public function render()
    {
        return '<div>'.htmlspecialchars($this->text).'</div>';
    }
}
