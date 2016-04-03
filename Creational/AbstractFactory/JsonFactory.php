<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Class JsonFactory.
 *
 * JsonFactory is a factory for creating a family of JSON component
 * (example for ajax)
 */
class JsonFactory extends AbstractFactory
{
    /**
     * Creates a picture component.
     *
     * @param string $path
     * @param string $name
     *
     * @return Json\Picture|Picture
     */
    public function createPicture($path, $name = '')
    {
        return new Json\Picture($path, $name);
    }

    /**
     * Creates a text component.
     *
     * @param string $content
     *
     * @return Json\Text|Text
     */
    public function createText($content)
    {
        return new Json\Text($content);
    }
}
