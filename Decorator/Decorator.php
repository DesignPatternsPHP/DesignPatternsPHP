<?php

namespace DesignPatterns\Decorator;

/**
 * Decorator pattern
 *
 * Purpose:
 * to dynamically add new functionality to class instances
 *
 * Examples:
 * - Zend Framework: decorators for Zend_Form_Element instances
 * - Web Service Layer: Decorators JSON and XML for a REST service (in this case, only one of these should be allowed of
 *   course)
 *
 */

/**
 * the Deoorator MUST implement the Renderer contract, this is the key-feature
 * of this design pattern. If not, this is no longer a Decorator but just a dumb
 * wrapper.
 */
abstract class Decorator implements Renderer
{

    protected $_wrapped;

    /**
     * You must type-hint the wrapped component :
     * It ensures you can call renderData() in the subclasses !
     * 
     * @param Renderer $wrappable
     */
    public function __construct(Renderer $wrappable)
    {
        $this->_wrapped = $wrappable;
    }
}

