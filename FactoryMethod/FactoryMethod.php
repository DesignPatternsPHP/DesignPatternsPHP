<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\FactoryMethod;

/**
 * FactoryMethod is a factory method. The good point on the SimpleFactory
 * is you can subclass it to implement different way to create vehicle for
 * each country.
 * 
 * For simple case, this abstracct class could be just an interface
 */
abstract class FactoryMethod
{

    /**
     * The children of the class must implement this method
     * 
     * Sometimes this method can be public to get "raw" object
     * 
     * @param string $type a generic type
     * 
     * @return Vehicle a new vehicle
     */
    abstract protected function createVehicle($type);

    /**
     * Creates a new vehicle
     * 
     * @param string $type
     * 
     * @return Vehicle a new vehicle
     */
    public function create($type)
    {
        $obj = $this->createVehicle($type);
        $obj->setColor("#f00");

        return $obj;
    }

}