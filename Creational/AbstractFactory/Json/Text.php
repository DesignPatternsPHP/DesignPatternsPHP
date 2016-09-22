<?php

namespace DesignPatterns\Creational\AbstractFactory\Json;

use DesignPatterns\Creational\AbstractFactory\Text as BaseText;

class Text extends BaseText
{
    /**
     * some crude rendering from JSON output.
     *
     * @return string
     */
    public function render()
    {
        return json_encode(array('content' => $this->text));
    }
}
