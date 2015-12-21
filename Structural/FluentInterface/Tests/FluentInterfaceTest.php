<?php

namespace DesignPatterns\Structural\FluentInterface\Tests;

use DesignPatterns\Structural\FluentInterface\Sql;

/**
 * FluentInterfaceTest tests the fluent interface SQL.
 */
class FluentInterfaceTest extends \PHPUnit_Framework_TestCase
{
    public function testBuildSQL()
    {
        $instance = new Sql();
        $query = $instance->select(array('foo', 'bar'))
                ->from('foobar', 'f')
                ->where('f.bar = ?')
                ->getQuery();

        $this->assertEquals('SELECT foo,bar FROM foobar AS f WHERE f.bar = ?', $query);
    }
}
