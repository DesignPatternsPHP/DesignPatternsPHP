<?php

namespace DesignPatterns\Behavioral\TemplateMethod;

/**
 * BeachJourney is vacation at the beach.
 */
class BeachJourney extends Journey
{
    /**
     * prints what to do to enjoy your vacation.
     */
    protected function enjoyVacation()
    {
        echo "Swimming and sun-bathing\n";
    }
}
