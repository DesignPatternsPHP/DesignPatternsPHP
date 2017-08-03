<?php

namespace DesignPatterns\Structural\Decorator\Tests;

use DesignPatterns\Structural\Decorator;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    /**
     * @var Decorator\Webservice
     */
    private $service;

    protected function setUp()
    {
        $this->service = new Decorator\Webservice('foobar');
    }

    public function testJsonDecorator()
    {
        $service = new Decorator\JsonRenderer($this->service);

        $this->assertEquals('"foobar"', $service->renderData());
    }

    public function testXmlDecorator()
    {
        $service = new Decorator\XmlRenderer($this->service);

        $this->assertXmlStringEqualsXmlString('<?xml version="1.0"?><content>foobar</content>', $service->renderData());
    }
}
