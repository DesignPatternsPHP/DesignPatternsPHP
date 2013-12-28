<?php

namespace DesignPatterns\Tests\Decorator;

use DesignPatterns\Decorator;

/**
 * DecoratorTest tests the decorator pattern
 */
class DecoratorTest extends \PHPUnit_Framework_TestCase
{

    protected $service;

    protected function setUp()
    {
        $this->service = new Decorator\Webservice(array('foo' => 'bar'));
    }

    public function testJsonDecorator()
    {
        // Wrap service with a JSON decorator for renderers
        $service = new Decorator\RenderInJson($this->service);
        // Our Renderer will now output JSON instead of an array
        $this->assertEquals('{"foo":"bar"}', $service->renderData());
    }

    public function testXmlDecorator()
    {
        // Wrap service with a JSON decorator for renderers
        $service = new Decorator\RenderInXml($this->service);
        // Our Renderer will now output XML instead of an array
        $this->assertXmlStringEqualsXmlString('<?xml version="1.0"?><foo>bar</foo>', $service->renderData());
    }

    /**
     * The first key-point of this pattern :
     */
    public function testDecoratorMustImplementsRenderer()
    {
        $this->assertTrue(is_subclass_of('DesignPatterns\Decorator\Decorator', 'DesignPatterns\Decorator\RendererInterface'));
    }

    /**
     * Second key-point of this pattern : the decorator is type-hinted
     * 
     * @expectedException \PHPUnit_Framework_Error
     */
    public function testDecoratorTypeHinted()
    {
        $this->getMockForAbstractClass('DesignPatterns\Decorator\Decorator', array(new \stdClass()));
    }

    /**
     * The decorator implements and wraps the same interface
     */
    public function testDecoratorOnlyAcceptRenderer()
    {
        $mock = $this->getMock('DesignPatterns\Decorator\RendererInterface');
        $dec = $this->getMockForAbstractClass('DesignPatterns\Decorator\Decorator', array($mock));
        $this->assertNotNull($dec);
    }
}
