<?php

namespace DesignPatterns\Creational\Multition\Tests;

use DesignPatterns\Creational\Multiton\Multiton;

class MultitonTest extends \PHPUnit_Framework_TestCase
{
    public function testUniqueness()
    {
        $firstCall = Multiton::getInstance(Multiton::INSTANCE_1);
        $secondCall = Multiton::getInstance(Multiton::INSTANCE_1);

        $this->assertInstanceOf('DesignPatterns\Creational\Multiton\Multiton', $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }

    public function testUniquenessForEveryInstance()
    {
        $firstCall = Multiton::getInstance(Multiton::INSTANCE_1);
        $secondCall = Multiton::getInstance(Multiton::INSTANCE_2);

        $this->assertInstanceOf('DesignPatterns\Creational\Multiton\Multiton', $firstCall);
        $this->assertInstanceOf('DesignPatterns\Creational\Multiton\Multiton', $secondCall);
        $this->assertNotSame($firstCall, $secondCall);
    }
}
