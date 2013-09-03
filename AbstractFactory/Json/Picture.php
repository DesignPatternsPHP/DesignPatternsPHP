<?php

namespace DesignPatterns\AbstractFactory\Json;

use DesignPatterns\AbstractFactory\Picture as BasePicture;

/**
 * Class Picture
 *
 * Picture is a concrete image for JSON rendering
 *
 * @package DesignPatterns\AbstractFactory\Json
 */
class Picture extends BasePicture
{

    /**
     * some crude rendering from JSON output
     *
     * @return string
     */
    public function render()
    {
        return json_encode(array('title' => $this->_name, 'path' => $this->_path));
    }

}