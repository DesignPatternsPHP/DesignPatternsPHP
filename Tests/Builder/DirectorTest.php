<?php

namespace DesignPatterns\Tests\Builder;

use DesignPatterns\Builder\Director;
use DesignPatterns\Builder\CarBuilder;
use DesignPatterns\Builder\BikeBuilder;
use DesignPatterns\Builder\BuilderInterface;

/**
 * DirectorTest tests the builder pattern
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
            array(new BikeBuilder())
        );
    }

    /**
     * Here we test the build process. Notice that the client don't know
     * anything about the contrete builder.
     * 
     * @dataProvider getBuilder
     */
    public function testBuild(BuilderInterface $builder)
    {
        $newVehicle = $this->director->build($builder);
        $this->assertInstanceOf('DesignPatterns\Builder\Parts\Vehicle', $newVehicle);
    }
}
