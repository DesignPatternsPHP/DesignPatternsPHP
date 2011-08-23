<?php

namespace DesignPatterns;

/**
 * composite pattern
 *
 * Purpose:
 * to treat a group of objects the same way as a single instance of the object, it establishes 1-to-n relationships
 * between objects
 *
 * Example:
 * - a form class instance handles all its form elements like a single instance of the form, when render() is called, it
 *   subsequently runs trough all its child elements and calls render() on them
 * - a class to process files would process it by running process on all row objects in the file
 *
 */
class Form
{
    protected $_elements;

    /**
     * runs through all elements and calls render() on them, then returns the complete representation
     * of the form
     *
     * from the outside, one will not see this and the form will act like a single object instance
     *
     * @return string
     */
    public function render()
    {
        $formCode = '';
        foreach ($this->_elements as $element) {
            $formCode .= $element->render();
        }

        return $formCode;
    }

    public function addElement(FormElement $element)
    {
        $this->_elements[] = $element;
    }
}

abstract class FormElement
{
    abstract public function render();
}

class TextElement extends FormElement
{
    public function render()
    {
        return 'this is a text element';
    }
}

class InputElement extends FormElement
{
    public function render()
    {
        return '<input type="text" />';
    }
}

$form = new Form();
$form->addElement(new TextElement());
$form->addElement(new InputElement());
echo $form->render();