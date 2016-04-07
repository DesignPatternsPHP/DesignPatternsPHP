<?php

namespace DesignPatterns\Behavioral\Observer;

/**
 * Observer pattern : The observed object (the subject).
 *
 * The subject maintains a list of Observers and sends notifications.
 */
class User implements \SplSubject
{
    /**
     * user data.
     *
     * @var array
     */
    protected $data = array();

    /**
     * observers.
     *
     * @var \SplObjectStorage
     */
    protected $observers;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    /**
     * attach a new observer.
     *
     * @param \SplObserver $observer
     *
     * @return void
     */
    public function attach(\SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    /**
     * detach an observer.
     *
     * @param \SplObserver $observer
     *
     * @return void
     */
    public function detach(\SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    /**
     * notify observers.
     *
     * @return void
     */
    public function notify()
    {
        /** @var \SplObserver $observer */
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * Ideally one would better write setter/getter for all valid attributes and only call notify()
     * on attributes that matter when changed.
     *
     * @param string $name
     * @param mixed  $value
     *
     * @return void
     */
    public function __set($name, $value)
    {
        $this->data[$name] = $value;

        // notify the observers, that user has been updated
        $this->notify();
    }
}
