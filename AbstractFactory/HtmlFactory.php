<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\AbstractFactory;

/**
 * HtmlFactory is a concrete factory for HTML component
 */
class HtmlFactory extends AbstractFactory
{

    public function createPicture($path, $name = '')
    {
        return new Html\Picture($path, $name);
    }

    public function createText($content)
    {
        return new Html\Text($content);
    }

}