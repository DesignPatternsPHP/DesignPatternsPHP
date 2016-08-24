<?php

namespace DesignPatterns\Behavioral\TemplateMethod;

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
     * This method must be implemented, this is the key-feature of this pattern.
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
     * This method will be unknown by subclasses (better).
     */
    private function buyAFlight()
    {
        echo "Buying a flight\n";
    }

    /**
     * Subclasses will get access to this method but cannot override it and
     * compromise this algorithm (warning : cause of cyclic dependencies).
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
