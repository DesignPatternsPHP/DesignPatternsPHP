<?php

namespace DesignPatterns\Structural\Proxy\Tests;

use DesignPatterns\Structural\Decorator;
use DesignPatterns\Structural\Proxy\RecordProxy;

class ProxyTest extends \PHPUnit_Framework_TestCase
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

        $this->assertInstanceOf('DesignPatterns\Structural\Proxy\Record', $recordProxy);
    }
}
