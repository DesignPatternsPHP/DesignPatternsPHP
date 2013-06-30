<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\AbstractFactory;

/**
 * JsonFactory is a factory for creating a family of JSON component
 * (example for ajax)
 */
class JsonFactory extends AbstractFactory
{

    public function createPicture($path, $name = '')
    {
        return new Json\Picture($path, $name);
    }

    public function createText($content)
    {
        return new Json\Text($content);
    }

}