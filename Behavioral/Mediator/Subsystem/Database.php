<?php

namespace DesignPatterns\Behavioral\Mediator\Subsystem;

use DesignPatterns\Behavioral\Mediator\Colleague;

/**
 * Database is a database service.
 */
class Database extends Colleague
{
    /**
     * @return string
     */
    public function getData()
    {
        return 'World';
    }
}
