<?php

namespace DesignPatterns\Observer;

/**
 * Observer pattern : The observed object (the subject)
 * 
 * The subject maintains a list of Observer and send notificiations.
 *
 */
class User implements \SplSubject
{

    protected $_data = array();

    /**
     * @var array
     */
    protected $_observers = array();

    /**
     * attach a new observer
     *
     * @param \SplObserver $observer
     * @return void
     */
    public function attach(\SplObserver $observer)
    {
        $this->_observers[] = $observer;
    }

    /**
     * detach an observer
     *
     * @param \SplObserver $observer
     * @return void
     */
    public function detach(\SplObserver $observer)
    {
        $index = array_search($observer, $this->_observers);

        if (false !== $index) {
            unset($this->_observers[$index]);
        }
    }

    /**
     *
     *
     * @return void
     */
    public function notify()
    {
        /** @var SplObserver $observer */
        foreach ($this->_observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * Ideally one would better write setter/getter for all valid attributes and only call notify()
     * on attributes that matter when changed
     *
     * @param $name
     * @param $value
     * @return void
     */
    public function __set($name, $value)
    {
        $this->_data[$name] = $value;

        // notify the observers, that user has been updated
        $this->notify();
    }

}

