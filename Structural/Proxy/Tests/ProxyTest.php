<?php

namespace DesignPatterns\Structural\Proxy\Tests;

use DesignPatterns\Structural\Proxy\RecordProxy;
use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{
    public function testProxyReturnTheSameValue()
    {
        $foo = 'Foo';
        $bar = 'Bar';
        $recordProxy = new RecordProxy;
        $recordProxy->__set($foo, $bar);
        $this->assertEquals($bar, $recordProxy->__get($foo));
    }

    public function testProxyThrowExceptionWhenNotSetData()
    {
        $this->expectException(\Exception::class);
        $recordProxy = new RecordProxy;
        $recordProxy->__get('Foo');
    }

    public function testProxyThrowExceptionWhenNotNameInData()
    {
        $this->expectException(\OutOfRangeException::class);
        $foo = 'Foo';
        $bar = 'Bar';
        $recordProxy = new RecordProxy;
        $recordProxy->__set($foo, $bar);
        $recordProxy->__get('Baz');
    }
}
