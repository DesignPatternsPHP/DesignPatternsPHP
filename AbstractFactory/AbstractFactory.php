<?php

namespace DesignPatterns;

/**
 * Abstract Factory pattern
 *
 * Purpose:
 * to create series of related or dependant objects without specifying their concrete classes,
 * usually the created classes all implement the same interface
 *
 * Examples:
 * - A factory to create media in a CMS: classes would be text, audio, video, picture
 * - SQL factory (types are all strings with SQL, but they vary in detail (tables, fields, etc.))
 * - Zend Framework: Zend_Form::createElement() creates form elements, but you could also call
 *   new TextElement() instead
 *
 */
abstract class AbstractFactory
{
    /**
     * @static
     * @param string $content
     * @return AbstractFactory\Text
     */
    public static function createText($content)
    {
        return new AbstractFactory\Text($content);
    }

    /**
     * @static
     * @param string $path
     * @param string $name
     * @return AbstractFactory\Picture
     */
    public static function createPicture($path, $name = '')
    {
        return new AbstractFactory\Picture($path, $name);
    }
}
