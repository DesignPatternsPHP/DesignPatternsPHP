<?php

namespace DesignPatterns\Strategy;

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
