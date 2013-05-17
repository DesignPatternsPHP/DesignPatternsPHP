<?php

namespace DesignPatterns;

/**
 * Observer pattern
 *
 * Purpose:
 * to implement a publish/subscribe behaviour to an object, whenever a "Subject" object changes it's state, the attached
 * "Observers" will be notified. It is used to shorten the amount of coupled objects and uses loose coupling instead
 *
 * Examples:
 * - a message queue system is observed to show the progress of a job in a GUI
 *
 * PHP already defines two interfaces that can help to implement this pattern: SplObserver and SplSubject
 *
 */
class UserObserver implements \SplObserver
{
    public function update(\SplSubject $subject)
    {
        echo get_class($subject) . ' has been updated';
    }
}

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

$user = new User();
$user->attach(new UserObserver());

$user->notify();
