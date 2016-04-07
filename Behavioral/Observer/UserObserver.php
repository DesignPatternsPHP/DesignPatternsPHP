<?php

namespace DesignPatterns\Behavioral\Observer;

/**
 * class UserObserver.
 */
class UserObserver implements \SplObserver
{
    /**
     * This is the only method to implement as an observer.
     * It is called by the Subject (usually by SplSubject::notify() ).
     *
     * @param \SplSubject $subject
     */
    public function update(\SplSubject $subject)
    {
        echo get_class($subject).' has been updated';
    }
}
