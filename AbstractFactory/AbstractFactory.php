<?php

namespace DesignPatterns\AbstractFactory;

/**
 * Abstract Factory pattern
 *
 * Purpose:
 * to create series of related or dependant objects without specifying their concrete classes,
 * usually the created classes all implement the same interface. The client of the abstract
 * factory does not care about how these objects are created, he just knows they go together.
 * 
 * Sometimes also known as "Kit" in a GUI libraries. 
 * 
 * This design pattern implements the Dependency Inversion Principle since
 * it is the concrete subclass which creates concrete components.
 * 
 * In this case, the abstract factory is a contract for creating some components
 * for the web. There are two components : Text and Picture. There is two ways 
 * of rendering : HTML or JSON.
 * 
 * Therefore 4 concretes classes, but the client just need to know this contract
 * to build a correct http response (for a html page or for an ajax request)
 */
abstract class AbstractFactory
{
    /**
     * Creates a text component
     * 
     * @param string $content
     * @return Text
     */
    abstract public function createText($content);

    /**
     * Creates a picture component
     * 
     * @param string $path
     * @param string $name
     * @return Picture
     */
    abstract public function createPicture($path, $name = '');
}
