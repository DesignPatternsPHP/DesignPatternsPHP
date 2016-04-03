<?php

namespace DesignPatterns\Creational\Prototype;

$fooPrototype = new FooBookPrototype();
$barPrototype = new BarBookPrototype();

// now lets say we need 10,000 books of foo and 5,000 of bar ...
for ($i = 0; $i < 10000; $i++) {
    $book = clone $fooPrototype;
    $book->setTitle('Foo Book No '.$i);
}

for ($i = 0; $i < 5000; $i++) {
    $book = clone $barPrototype;
    $book->setTitle('Bar Book No '.$i);
}
