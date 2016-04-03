<?php

namespace DesignPatterns\Behavioral\Strategy\Tests;

use DesignPatterns\Behavioral\Strategy\DateComparator;
use DesignPatterns\Behavioral\Strategy\IdComparator;
use DesignPatterns\Behavioral\Strategy\ObjectCollection;
use DesignPatterns\Behavioral\Strategy\Strategy;

/**
 * Tests for Strategy pattern.
 */
class StrategyTest extends \PHPUnit_Framework_TestCase
{
    public function getIdCollection()
    {
        return array(
            array(
                array(array('id' => 2), array('id' => 1), array('id' => 3)),
                array('id' => 1),
            ),
            array(
                array(array('id' => 3), array('id' => 2), array('id' => 1)),
                array('id' => 1),
            ),
        );
    }

    public function getDateCollection()
    {
        return array(
            array(
                array(array('date' => '2014-03-03'), array('date' => '2015-03-02'), array('date' => '2013-03-01')),
                array('date' => '2013-03-01'),
            ),
            array(
                array(array('date' => '2014-02-03'), array('date' => '2013-02-01'), array('date' => '2015-02-02')),
                array('date' => '2013-02-01'),
            ),
        );
    }

    /**
     * @dataProvider getIdCollection
     */
    public function testIdComparator($collection, $expected)
    {
        $obj = new ObjectCollection($collection);
        $obj->setComparator(new IdComparator());
        $elements = $obj->sort();

        $firstElement = array_shift($elements);
        $this->assertEquals($expected, $firstElement);
    }

    /**
     * @dataProvider getDateCollection
     */
    public function testDateComparator($collection, $expected)
    {
        $obj = new ObjectCollection($collection);
        $obj->setComparator(new DateComparator());
        $elements = $obj->sort();

        $firstElement = array_shift($elements);
        $this->assertEquals($expected, $firstElement);
    }
}
