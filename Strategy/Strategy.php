<?php

namespace DesignPatterns;

/**
 * strategy pattern
 *
 * Terminology:
 * - Context
 * - Strategy
 * - Concrete Strategy
 *
 * Purpose:
 * to separate strategies and to enable fast switching between them.
 * also this pattern is a good alternative to inheritance (instead of having an abstract class that is extended)
 *
 * Examples:
 * - sorting a list of objects, one strategy by date, the other by id
 * - simplify unit testing: e.g. switching between file and in-memory storage
 *
 */

interface Comparator
{
    /**
     * @abstract
     * @param object $a
     * @param object $b
     * @return bool
     */
    public function compare($a, $b);
}

class ObjectCollection
{
    private $_elements;
    private $_comparator;

    /**
     * @param array $elements
     */
    public function __construct(array $elements = array())
    {
        $this->_elements = $elements;
    }

    /**
     * @return array
     */
    public function sort()
    {
        $callback = array($this->_comparator, 'compare');
        uasort($this->_elements, $callback);

        return $this->_elements;
    }

    /**
     * @param Comparator $comparator
     * @return void
     */
    public function setComparator(Comparator $comparator)
    {
        $this->_comparator = $comparator;
    }
}

class IdComparator implements Comparator
{
    public function compare($a, $b)
    {
        if ($a['id'] == $b['id']) {
            return 0;
        } else {
            return $a['id'] < $b['id'] ? -1 : 1;
        }
    }
}

class DateComparator implements Comparator
{
    public function compare($a, $b)
    {
        $aDate = strtotime($a['date']);
        $bDate = strtotime($b['date']);

        if ($aDate == $bDate) {
            return 0;
        } else {
            return $aDate < $bDate ? -1 : 1;
        }
    }
}

$elements = array(
    array(
        'id' => 2,
        'date' => '2011-01-01',
    ),
    array(
        'id' => 1,
        'date' => '2011-02-01'
    )
);

$collection = new ObjectCollection($elements);
$collection->setComparator(new IdComparator());
$collection->sort();

$collection->setComparator(new DateComparator());
$collection->sort();