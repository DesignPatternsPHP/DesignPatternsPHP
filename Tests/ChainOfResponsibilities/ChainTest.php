<?php

/*
 * DesignPatternPHP
 */

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

    public function testProcess()
    {
        $request = new Request();
        $request->verb = 'get';
        $request->key = 'bar';

        $ret = $this->chain->handle($request);
        print_r($request);
    }

}