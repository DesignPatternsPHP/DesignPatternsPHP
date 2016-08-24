<?php

namespace DesignPatterns\Structural\Composite\Tests;

use DesignPatterns\Structural\Composite;

/**
 * FormTest tests the composite pattern on Form.
 */
class CompositeTest extends \PHPUnit_Framework_TestCase
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
     * The point of this pattern, a Composite must inherit from the node
     * if you want to build trees.
     */
    public function testFormImplementsFormEelement()
    {
        $className = 'DesignPatterns\Structural\Composite\Form';
        $abstractName = 'DesignPatterns\Structural\Composite\FormElement';
        $this->assertTrue(is_subclass_of($className, $abstractName));
    }
}
