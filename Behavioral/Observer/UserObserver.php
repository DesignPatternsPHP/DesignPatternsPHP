<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\Observer;

use SplSubject;

class UserObserver implements \SplObserver
{
    /**
     * @var SplSubject[]
     */
    private $changedUsers = [];

    /**
     * It is called by the Subject, usually by SplSubject::notify()
     *
     * @param SplSubject $subject
     */
    public function update(SplSubject $subject)
    {
        $this->changedUsers[] = clone $subject;
    }

    /**
     * @return SplSubject[]
     */
    public function getChangedUsers(): array
    {
        return $this->changedUsers;
    }
}
