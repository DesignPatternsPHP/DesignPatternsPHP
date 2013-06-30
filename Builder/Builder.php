<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\Builder;

/**
 * Builder is an interface that build parts of a complex object.
 * 
 * Sometime, if the builder has a better knowledge of what it builds, this 
 * interface could be an abstract class with default methods (aka adapter)
 * 
 * If you have a complex inheritance tree for vehicles, it is logical to have
 * a complex inheritance tree for builders too.
 * 
 * Note: Builders have often a fluent interface, see the mock builder of
 * PHPUnit for example.
 */
interface Builder
{

    function createVehicle();

    function addWheel();

    function addEngine();

    function addDoors();

    function getVehicle();
}