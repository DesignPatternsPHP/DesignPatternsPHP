<?php

namespace DesignPatterns\Behavioral\TemplateMethod;

class CityJourney extends Journey
{
    /**
     * @return string
     */
    protected function enjoyVacation(): string
    {
        return "Eat, drink, take photos and sleep";
    }

    /**
     * @return string
     */
    protected function buyGift(): string
    {
        return "Buy a gift";
    }
}
