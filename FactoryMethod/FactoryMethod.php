<?php

namespace DesignPatterns\FactoryMethod;

/**
 * FactoryMethod is a factory method. The good point over the SimpleFactory
 * is you can subclass it to implement different way to create vehicle for
 * each country (see subclasses)
 * 
 * For simple case, this abstract class could be just an interface
 * 
 * This pattern is a "real" Design Pattern because it achieves the
 * "Dependency Inversion Principle" a.k.a the "D" in S.O.L.I.D principles.
 * 
 * It means the FactoryMethod class depends on abstractions not concrete classes.
 * This is the real trick compared to SImpleFactory or StaticFactory.
 */
abstract class FactoryMethod
{

    const CHEAP = 1;
    const FAST = 2;

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
     * @param int $type
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
