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
        $this->service = new Decorator\Webservice('foo/bar');
    }

    public function testJsonDecorator()
    {
        $service = new Decorator\JsonRenderer($this->service);

        $this->assertEquals('"foo\/bar"', $service->renderData());
        $this->assertEquals('"foo/bar"', $service->renderDataWithOptions(JSON_UNESCAPED_SLASHES));
    }

    public function testXmlDecorator()
    {
        $service = new Decorator\XmlRenderer($this->service);

        $this->assertXmlStringEqualsXmlString('<?xml version="1.0"?><content>foo/bar</content>', $service->renderData());
    }
}
