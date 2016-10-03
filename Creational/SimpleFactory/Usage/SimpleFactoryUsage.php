<?php

namespace DesignPatterns\Creational\SimpleFactory\Usage;

use DesignPatterns\Creational\SimpleFactory\SimpleFactory;

$factory = new SimpleFactory();
$bicycle = $factory->createBicycle();
$bicycle->driveTo('Paris');
