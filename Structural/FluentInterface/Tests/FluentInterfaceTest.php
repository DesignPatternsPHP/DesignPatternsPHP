<?php

namespace DesignPatterns\Structural\FluentInterface\Tests;

use DesignPatterns\Structural\FluentInterface\Sql;

class FluentInterfaceTest extends \PHPUnit_Framework_TestCase
{
    public function testBuildSQL()
    {
        $query = (new Sql())
                ->select(['foo', 'bar'])
                ->from('foobar', 'f')
                ->where('f.bar = ?');

        $this->assertEquals('SELECT foo, bar FROM foobar AS f WHERE f.bar = ?', (string) $query);
    }
}
