<?php

namespace DesignPatterns\Observer;

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
    /**
     * This is the only method to implement as an observer.
     * It is called by the Subject (usually by SplSubject::notify() )
     * 
     * @param \SplSubject $subject
     */
    public function update(\SplSubject $subject)
    {
        echo get_class($subject) . ' has been updated';
    }
}
