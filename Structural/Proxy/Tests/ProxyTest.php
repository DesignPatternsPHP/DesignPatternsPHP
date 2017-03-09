<?php

namespace DesignPatterns\Structural\Proxy\Tests;

use DesignPatterns\Structural\Proxy\RecordProxy;
use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{
    public function testWillSetDirtyFlagInProxy()
    {
        $recordProxy = new RecordProxy([]);
        $recordProxy->username = 'baz';

        $this->assertTrue($recordProxy->isDirty());
    }

    public function testProxyIsInstanceOfRecord()
    {
        $recordProxy = new RecordProxy([]);
        $recordProxy->username = 'baz';

        $this->assertInstanceOf(RecordProxy::class, $recordProxy);
    }
}
