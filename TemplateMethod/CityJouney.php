<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\TemplateMethod;

/**
 * CityJouney is a journey in a city
 */
class CityJouney extends Journey
{

    protected function enjoyVacation()
    {
        echo "Eat, drink, take photos and sleep\n";
    }

}