<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Mediator;

interface Mediator
{
    public function getUserName(User $user): string;
    public function getUserInfo(User $user): string;
}
