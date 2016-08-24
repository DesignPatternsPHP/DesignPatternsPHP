<?php

namespace DesignPatterns\Creational\AbstractFactory\Json;

use DesignPatterns\Creational\AbstractFactory\Picture as BasePicture;

/**
 * Class Picture.
 *
 * Picture is a concrete image for JSON rendering
 */
class Picture extends BasePicture
{
    /**
     * some crude rendering from JSON output.
     *
     * @return string
     */
    public function render()
    {
        return json_encode(array('title' => $this->name, 'path' => $this->path));
    }
}
