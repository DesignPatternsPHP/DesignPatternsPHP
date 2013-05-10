<?php

/*
 * DesignPatternPHP
 */

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
        echo $form->render();
    }

}