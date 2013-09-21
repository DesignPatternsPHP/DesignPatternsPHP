<?php

namespace DesignPatterns\Builder;

/**
 * Builder is an interface that build parts of a complex object.
 * 
 * Sometime, if the builder has a better knowledge of what it builds, this 
 * interface could be an abstract class with default methods (aka adapter)
 * 
 * If you have a complex inheritance tree for vehicles, it is logical to have
 * a complex inheritance tree for builders too.
 * 
 * Note: Builders have often a fluent interface, see the mock builder of
 * PHPUnit for example.
 */
interface BuilderInterface
{
    /**
     * @return mixed
     */
    public function createVehicle();

    /**
     * @return mixed
     */
    public function addWheel();

    /**
     * @return mixed
     */
    public function addEngine();

    /**
     * @return mixed
     */
    public function addDoors();

    /**
     * @return mixed
     */
    public function getVehicle();
}
