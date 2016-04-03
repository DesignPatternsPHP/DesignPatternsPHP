<?php

namespace DesignPatterns\Creational\Builder;

/**
 * BikeBuilder builds bike.
 */
class BikeBuilder implements BuilderInterface
{
    /**
     * @var Parts\Bike
     */
    protected $bike;

    /**
     * {@inheritdoc}
     */
    public function addDoors()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function addEngine()
    {
        $this->bike->setPart('engine', new Parts\Engine());
    }

    /**
     * {@inheritdoc}
     */
    public function addWheel()
    {
        $this->bike->setPart('forwardWheel', new Parts\Wheel());
        $this->bike->setPart('rearWheel', new Parts\Wheel());
    }

    /**
     * {@inheritdoc}
     */
    public function createVehicle()
    {
        $this->bike = new Parts\Bike();
    }

    /**
     * {@inheritdoc}
     */
    public function getVehicle()
    {
        return $this->bike;
    }
}
