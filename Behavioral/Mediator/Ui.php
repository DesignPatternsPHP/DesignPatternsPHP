<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Mediator;

class Ui extends Colleague
{
    public function outputUserName(User $user)
    {
        echo $this->mediator->getUserName($user);
    }

    public function outputUserInfo(User $user)
    {
        echo $this->mediator->getUserInfo($user);
    }
}
