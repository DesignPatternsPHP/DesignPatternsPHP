<?php

namespace DesignPatterns\Strategy;

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
