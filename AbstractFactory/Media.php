<?php

namespace DesignPatterns\AbstractFactory;

/**
 * Interface Media
 *
 * This contract is not part of the pattern, in general case, each component
 * are not related
 *
 * @package DesignPatterns\AbstractFactory
 */
interface Media
{

    /**
     * some crude rendering from JSON or html output (depended on concrete class)
     *
     * @return string
     */
    function render();
}
