<?php

namespace DesignPatterns\Structural\DependencyInjection;

use DesignPatterns\Structural\DependencyInjection\Parameters;
use DesignPatterns\Structural\DependencyInjection\AbstractConfig;
use DesignPatterns\Structural\DependencyInjection\ArrayConfig;
use DesignPatterns\Structural\DependencyInjection\Connection;

class DependencyInjectionTest extends \PHPUnit_Framework_TestCase
{
    protected $config;
    protected $source;

    public function setUp()
    {
        $this->source = include 'config.php';
        $this->config = new ArrayConfig($this->source);
    }

    public function testDependencyInjection()
    {
        $connection = new Connection($this->config);
        $connection->connect();
        $this->assertEquals($this->source['host'], $connection->getHost());
    }
}
