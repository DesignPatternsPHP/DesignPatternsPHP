<?php

namespace DesignPatterns\Creational\Builder\Tests;

use DesignPatterns\Creational\Builder\BikeBuilder;
use DesignPatterns\Creational\Builder\BuilderInterface;
use DesignPatterns\Creational\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Director;

/**
 * DirectorTest tests the builder pattern.
 */
class DirectorTest extends \PHPUnit_Framework_TestCase
{
    protected $director;

    protected function setUp()
    {
        $this->director = new Director();
    }

    public function getBuilder()
    {
        return array(
            array(new CarBuilder()),
            array(new BikeBuilder()),
        );
    }

    /**
     * Here we test the build process. Notice that the client don't know
     * anything about the concrete builder.
     *
     * @dataProvider getBuilder
     */
    public function testBuild(BuilderInterface $builder)
    {
        $newVehicle = $this->director->build($builder);
        $this->assertInstanceOf('DesignPatterns\Creational\Builder\Parts\Vehicle', $newVehicle);
    }
}
