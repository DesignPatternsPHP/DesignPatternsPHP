<?php

namespace DesignPatterns\Behavioral\TemplateMethod;

/**
 * CityJourney is a journey in a city.
 */
class CityJourney extends Journey
{
    /**
     * prints what to do in your journey to enjoy vacation.
     */
    protected function enjoyVacation()
    {
        echo "Eat, drink, take photos and sleep\n";
    }
}
