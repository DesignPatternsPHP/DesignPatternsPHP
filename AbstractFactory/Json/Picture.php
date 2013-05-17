<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\AbstractFactory\Json;

use DesignPatterns\AbstractFactory\Picture as BasePicture;

/**
 * Picture is a concrete image for JSON rendering
 */
class Picture extends BasePicture
{

    // some crude rendering from JSON output
    public function render()
    {
        return json_encode(array('title' => $this->_name, 'path' => $this->_path));
    }

}