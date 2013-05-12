<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\Mediator\Subsystem;

use DesignPatterns\Mediator\Colleague;

/**
 * Database is a database service
 */
class Database extends Colleague
{

    public function getData()
    {
        return "World";
    }

}