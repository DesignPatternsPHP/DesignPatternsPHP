<?php

namespace DesignPatterns\More\ServiceLocator\Tests;

use DesignPatterns\More\ServiceLocator\DatabaseService;
use DesignPatterns\More\ServiceLocator\LogService;
use DesignPatterns\More\ServiceLocator\ServiceLocator;
use PHPUnit_Framework_TestCase as TestCase;

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
        $this->serviceLocator->add(
            'DesignPatterns\More\ServiceLocator\LogServiceInterface',
            $this->logService
        );

        $this->serviceLocator->add(
            'DesignPatterns\More\ServiceLocator\DatabaseServiceInterface',
            $this->databaseService
        );

        $this->assertTrue($this->serviceLocator->has('DesignPatterns\More\ServiceLocator\LogServiceInterface'));
        $this->assertTrue($this->serviceLocator->has('DesignPatterns\More\ServiceLocator\DatabaseServiceInterface'));

        $this->assertFalse($this->serviceLocator->has('DesignPatterns\More\ServiceLocator\FakeServiceInterface'));
    }

    public function testServicesWithObject()
    {
        $this->serviceLocator->add(
            'DesignPatterns\More\ServiceLocator\LogServiceInterface',
            $this->logService
        );

        $this->serviceLocator->add(
            'DesignPatterns\More\ServiceLocator\DatabaseServiceInterface',
            $this->databaseService
        );

        $this->assertSame(
            $this->logService,
            $this->serviceLocator->get('DesignPatterns\More\ServiceLocator\LogServiceInterface')
        );

        $this->assertSame(
            $this->databaseService,
            $this->serviceLocator->get('DesignPatterns\More\ServiceLocator\DatabaseServiceInterface')
        );
    }

    public function testServicesWithClass()
    {
        $this->serviceLocator->add(
            'DesignPatterns\More\ServiceLocator\LogServiceInterface',
            get_class($this->logService)
        );

        $this->serviceLocator->add(
            'DesignPatterns\More\ServiceLocator\DatabaseServiceInterface',
            get_class($this->databaseService)
        );

        $this->assertNotSame(
            $this->logService,
            $this->serviceLocator->get('DesignPatterns\More\ServiceLocator\LogServiceInterface')
        );

        $this->assertInstanceOf(
            'DesignPatterns\More\ServiceLocator\LogServiceInterface',
            $this->serviceLocator->get('DesignPatterns\More\ServiceLocator\LogServiceInterface')
        );

        $this->assertNotSame(
            $this->databaseService,
            $this->serviceLocator->get('DesignPatterns\More\ServiceLocator\DatabaseServiceInterface')
        );

        $this->assertInstanceOf(
            'DesignPatterns\More\ServiceLocator\DatabaseServiceInterface',
            $this->serviceLocator->get('DesignPatterns\More\ServiceLocator\DatabaseServiceInterface')
        );
    }

    public function testServicesNotShared()
    {
        $this->serviceLocator->add(
            'DesignPatterns\More\ServiceLocator\LogServiceInterface',
            $this->logService,
            false
        );

        $this->serviceLocator->add(
            'DesignPatterns\More\ServiceLocator\DatabaseServiceInterface',
            $this->databaseService,
            false
        );

        $this->assertNotSame(
            $this->logService,
            $this->serviceLocator->get('DesignPatterns\More\ServiceLocator\LogServiceInterface')
        );

        $this->assertInstanceOf(
            'DesignPatterns\More\ServiceLocator\LogServiceInterface',
            $this->serviceLocator->get('DesignPatterns\More\ServiceLocator\LogServiceInterface')
        );

        $this->assertNotSame(
            $this->databaseService,
            $this->serviceLocator->get('DesignPatterns\More\ServiceLocator\DatabaseServiceInterface')
        );

        $this->assertInstanceOf(
            'DesignPatterns\More\ServiceLocator\DatabaseServiceInterface',
            $this->serviceLocator->get('DesignPatterns\More\ServiceLocator\DatabaseServiceInterface')
        );
    }
}
