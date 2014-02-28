<?php

namespace DesignPatterns\Tests\ServiceLocator;

use DesignPatterns\ServiceLocator\DatabaseService;
use DesignPatterns\ServiceLocator\LogService;
use DesignPatterns\ServiceLocator\ServiceLocator;
use \PHPUnit_Framework_TestCase as TestCase;

class ServiceLocatorTest extends TestCase
{
    /**
     * @var LogService
     */
    private $logService;

    /**
     * @var DatabaseService
     */
    private $databaseService;

    /**
     * @var ServiceLocator
     */
    private $serviceLocator;

    public function setUp()
    {
        $this->serviceLocator = new ServiceLocator();

        $this->logService = new LogService();
        $this->databaseService = new DatabaseService();
    }

    public function testHasServices()
    {
        $this->serviceLocator->add('DesignPatterns\ServiceLocator\LogServiceInterface', $this->logService);
        $this->serviceLocator->add('DesignPatterns\ServiceLocator\DatabaseServiceInterface', $this->databaseService);

        $this->assertTrue($this->serviceLocator->has('DesignPatterns\ServiceLocator\LogServiceInterface'));
        $this->assertTrue($this->serviceLocator->has('DesignPatterns\ServiceLocator\DatabaseServiceInterface'));

        $this->assertFalse($this->serviceLocator->has('DesignPatterns\ServiceLocator\FakeServiceInterface'));
    }

    public function testServicesWithObject()
    {
        $this->serviceLocator->add('DesignPatterns\ServiceLocator\LogServiceInterface', $this->logService);
        $this->serviceLocator->add('DesignPatterns\ServiceLocator\DatabaseServiceInterface', $this->databaseService);

        $this->assertSame($this->logService, $this->serviceLocator->get('DesignPatterns\ServiceLocator\LogServiceInterface'));
        $this->assertSame($this->databaseService, $this->serviceLocator->get('DesignPatterns\ServiceLocator\DatabaseServiceInterface'));
    }

    public function testServicesWithClass()
    {
        $this->serviceLocator->add('DesignPatterns\ServiceLocator\LogServiceInterface', get_class($this->logService));
        $this->serviceLocator->add('DesignPatterns\ServiceLocator\DatabaseServiceInterface', get_class($this->databaseService));

        $this->assertNotSame($this->logService, $this->serviceLocator->get('DesignPatterns\ServiceLocator\LogServiceInterface'));
        $this->assertInstanceOf('DesignPatterns\ServiceLocator\LogServiceInterface', $this->serviceLocator->get('DesignPatterns\ServiceLocator\LogServiceInterface'));

        $this->assertNotSame($this->databaseService, $this->serviceLocator->get('DesignPatterns\ServiceLocator\DatabaseServiceInterface'));
        $this->assertInstanceOf('DesignPatterns\ServiceLocator\DatabaseServiceInterface', $this->serviceLocator->get('DesignPatterns\ServiceLocator\DatabaseServiceInterface'));
    }

    public function testServicesNotShared()
    {
        $this->serviceLocator->add('DesignPatterns\ServiceLocator\LogServiceInterface', $this->logService, false);
        $this->serviceLocator->add('DesignPatterns\ServiceLocator\DatabaseServiceInterface', $this->databaseService, false);

        $this->assertNotSame($this->logService, $this->serviceLocator->get('DesignPatterns\ServiceLocator\LogServiceInterface'));
        $this->assertInstanceOf('DesignPatterns\ServiceLocator\LogServiceInterface', $this->serviceLocator->get('DesignPatterns\ServiceLocator\LogServiceInterface'));

        $this->assertNotSame($this->databaseService, $this->serviceLocator->get('DesignPatterns\ServiceLocator\DatabaseServiceInterface'));
        $this->assertInstanceOf('DesignPatterns\ServiceLocator\DatabaseServiceInterface', $this->serviceLocator->get('DesignPatterns\ServiceLocator\DatabaseServiceInterface'));
    }
}
 