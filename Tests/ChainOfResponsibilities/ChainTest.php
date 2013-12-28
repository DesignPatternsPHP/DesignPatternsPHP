<?php

namespace DesignPatterns\Tests\ChainOfResponsibilities;

use DesignPatterns\ChainOfResponsibilities\Request;
use DesignPatterns\ChainOfResponsibilities\Responsible;

/**
 * ChainTest tests the CoR
 */
class ChainTest extends \PHPUnit_Framework_TestCase
{

    protected $chain;

    protected function setUp()
    {
        $this->chain = new Responsible\FastStorage(array('bar' => 'baz'));
        $this->chain->append(new Responsible\SlowStorage(array('bar' => 'baz', 'foo' => 'bar')));
    }

    public function makeRequest()
    {
        $request = new Request();
        $request->verb = 'get';
        return array(
            array($request)
        );
    }

    /**
     * @dataProvider makeRequest
     */
    public function testFastStorage($request)
    {
        $request->key = 'bar';
        $ret = $this->chain->handle($request);

        $this->assertTrue($ret);
        $this->assertObjectHasAttribute('response', $request);
        $this->assertEquals('baz', $request->response);
        // despite both handle owns the 'bar' key, the FastStorage is responding first
        $this->assertEquals('DesignPatterns\ChainOfResponsibilities\Responsible\FastStorage', $request->forDebugOnly);
    }

    /**
     * @dataProvider makeRequest
     */
    public function testSlowStorage($request)
    {
        $request->key = 'foo';
        $ret = $this->chain->handle($request);

        $this->assertTrue($ret);
        $this->assertObjectHasAttribute('response', $request);
        $this->assertEquals('bar', $request->response);
        // FastStorage has no 'foo' key, the SlowStorage is responding
        $this->assertEquals('DesignPatterns\ChainOfResponsibilities\Responsible\SlowStorage', $request->forDebugOnly);
    }

    /**
     * @dataProvider makeRequest
     */
    public function testFailure($request)
    {
        $request->key = 'kurukuku';
        $ret = $this->chain->handle($request);

        $this->assertFalse($ret);
        // the last responsible :
        $this->assertEquals('DesignPatterns\ChainOfResponsibilities\Responsible\SlowStorage', $request->forDebugOnly);
    }
}
