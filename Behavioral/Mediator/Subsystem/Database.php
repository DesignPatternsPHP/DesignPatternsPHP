<?php

namespace DesignPatterns\Behavioral\Mediator\Subsystem;

use DesignPatterns\Behavioral\Mediator\Colleague;

class Database extends Colleague
{
    /**
     * @return string
     */
    public function getData(): string
    {
        return 'World';
    }
}
