<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\AbstractFactory\Json;

use DesignPatterns\AbstractFactory\Text as BaseText;

/**
 * Text is a text component with a JSON rendering
 */
class Text extends BaseText
{

    public function render()
    {
        return json_encode(array('content' => $this->_text));
    }

}