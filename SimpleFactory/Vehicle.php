<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\SimpleFactory;

/**
 * Vehicle is a contract for a vehicle
 */
interface Vehicle
{

    function driveTo($destination);
}