<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Mediator;

class UserRepository extends Colleague
{
    public function getUserName(User $user): string
    {
        return 'User: ' . $user->getUserName();
    }

    public function getUserInfo(User $user): string
    {
        return 'User info: ' . $user->getUserInfo();
    }
}
