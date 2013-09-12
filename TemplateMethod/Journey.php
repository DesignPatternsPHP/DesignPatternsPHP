<?php

namespace DesignPatterns\TemplateMethod;

/**
 * Template Method is a behavioral design pattern.
 * 
 * Perhaps you have encountered it many times already. The idea is to let subclasses
 * of this abstract template "finish" the behavior of an algorithm.
 * 
 * A.k.a the "Hollywood principle" : "" Don't call us, we call you. ""
 * This class is not called by subclasses but the inverse.
 * How ? With abstraction of course. 
 * 
 * In other words, this is a skeleton of algorithm, well-suited for framework 
 * libraries. The user has just to implement one method and the superclass do
 * the job.
 * 
 * It is an easy way to decouple concrete classes and reduce copy-paste, 
 * that's why you'll find it everywhere.
 */
abstract class Journey
{
    /**
     * This is the public service provided by this class and its subclasses.
     * Notice it is final to "freeze" the global behavior of algorithm.
     * If you want to override this contract, make an interface with only takeATrip() 
     * and subclass it.
     */
    final public function takeATrip()
    {
        $this->buyAFlight();
        $this->takePlane();
        $this->enjoyVacation();
        $this->buyGift();
        $this->takePlane();
    }

    /**
     * This method must be implemented, this is the key-feature of this pattern
     */
    abstract protected function enjoyVacation();

    /**
     * This method is also part of the algorithm but it is optional.
     * This is an "adapter" (do not confuse with the Adapter pattern, not related)
     * You can override it only if you need to.
     */
    protected function buyGift()
    {
    }

    /**
     * this method will be unknown by subclasses (better)
     */
    private function buyAFlight()
    {
        echo "Buying a flight\n";
    }

    /**
     * sbclasses will get access to this method but cannot override it and
     * compromise this algorithm (warning : cause of cyclic dependencies)
     */
    final protected function takePlane()
    {
        echo "Taking the plane\n";
    }

    // A note regarding the keyword "final" : don't use it when you start coding :
    // add it after you narrow and know exactly what change and what remain unchanged
    // in this algorithm.
    // [abstract] x [3 access] x [final] = 12 combinations, it can be hard !
}
