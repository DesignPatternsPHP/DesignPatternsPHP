<?php

namespace DesignPatterns\Test\Composite;

use DesignPatterns\Composite;

/**
 * FormTest tests the composite pattern on Form
 */
class FormTest extends \PHPUnit_Framework_TestCase
{

    public function testRender()
    {
        $form = new Composite\Form();
        $form->addElement(new Composite\TextElement());
        $form->addElement(new Composite\InputElement());
        $embed = new Composite\Form();
        $embed->addElement(new Composite\TextElement());
        $embed->addElement(new Composite\InputElement());
        $form->addElement($embed);  // here we have a embedded form (like SF2 does)

        $this->assertRegExp('#^\s{4}#m', $form->render());
    }

    /**
     * The all point of this pattern, a Composite must inherit from the node
     * if you want to builld trees
     */
    public function testFormImplementsFormEelement()
    {
        $this->assertTrue(is_subclass_of('DesignPatterns\Composite\Form', 'DesignPatterns\Composite\FormElement'));
    }
}
