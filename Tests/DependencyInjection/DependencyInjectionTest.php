<?php

namespace DesignPatterns\Tests\DependencyInjection;

use DesignPatterns\DependencyInjection\Parameters;
use DesignPatterns\DependencyInjection\AbstractConfig;
use DesignPatterns\DependencyInjection\ArrayConfig;
use DesignPatterns\DependencyInjection\Connection;

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
