<?php

namespace DesignPatterns\Composite;

/**
 * Composite pattern
 *
 * Purpose:
 * to treat a group of objects the same way as a single instance of the object
 *
 * Example:
 * - a form class instance handles all its form elements like a single instance of the form, when render() is called, it
 *      subsequently runs trough all its child elements and calls render() on them
 * - Zend_Config: a tree of configuration options, each one is a Zend_Config object
 *
 * The composite node MUST extend the component contract. This is mandatory for building
 * a tree of component.
 */
class Form extends FormElement
{
    /**
     * @var array|FormElement[]
     */
    protected $elements;

    /**
     * runs through all elements and calls render() on them, then returns the complete representation
     * of the form
     *
     * from the outside, one will not see this and the form will act like a single object instance
     *
     * @param int $indent
     *
     * @return string
     */
    public function render($indent = 0)
    {
        $formCode = '';

        foreach ($this->elements as $element) {
            $formCode .= $element->render($indent + 1) . PHP_EOL;
        }

        return $formCode;
    }

    /**
     * @param FormElement $element
     */
    public function addElement(FormElement $element)
    {
        $this->elements[] = $element;
    }
}
