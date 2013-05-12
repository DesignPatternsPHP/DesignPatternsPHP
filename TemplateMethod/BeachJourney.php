<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\TemplateMethod;

/**
 * BeachJourney is vacation at the beach
 */
class BeachJourney extends Journey
{

    protected function enjoyVacation()
    {
        echo "Swimming and sun-bathing\n";
    }

}