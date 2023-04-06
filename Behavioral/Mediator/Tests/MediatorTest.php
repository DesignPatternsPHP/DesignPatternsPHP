<?php

declare(strict_types=1);

namespace DesignPatterns\Tests\Mediator\Tests;

use DesignPatterns\Behavioral\Mediator\Ui;
use DesignPatterns\Behavioral\Mediator\UserRepository;
use DesignPatterns\Behavioral\Mediator\UserRepositoryUiMediator;
use DesignPatterns\Behavioral\Mediator\User;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    public function testOutputUserName()
    {
        $mediator = new UserRepositoryUiMediator(new UserRepository(), new Ui());
        $user = new User('Dominik',"Some personal information about the user.");

        $this->expectOutputString('User: Dominik');
        $mediator->printUserName($user);
    }
    public function testOutputUserInfo()
    {
        $mediator = new UserRepositoryUiMediator(new UserRepository(), new Ui());
        $user = new User('Dominik',"Some personal information about the user.");

        $this->expectOutputString('User info: Some personal information about the user.');
        $mediator->printUserInfo($user);
    }
}
