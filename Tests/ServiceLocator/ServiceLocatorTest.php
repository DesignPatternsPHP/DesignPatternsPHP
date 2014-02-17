<?php
/**
 * DesignPatternsPHP
 *
 * Copyright (c) 2014 Matteo Tafani Alunno
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

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
 