<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\DataMapper;

class User
{
    public static function fromState(array $state): User
    {
        // validate state before accessing keys!

        return new self(
            $state['username'],
            $state['email']
        );
    }

    public function __construct(private string $username, private string $email)
    {
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
