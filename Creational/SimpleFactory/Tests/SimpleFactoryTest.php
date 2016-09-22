<?php

namespace DesignPatterns\Creational\SimpleFactory\Tests;

use DesignPatterns\Creational\SimpleFactory\SimpleFactory;

class SimpleFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testCanCreateBicycle()
    {
        $bicycle = (new SimpleFactory())->createBicycle();
        $this->assertInstanceOf('DesignPatterns\Creational\SimpleFactory\Bicycle', $bicycle);
    }
}
