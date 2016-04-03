<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Interface MediaInterface.
 *
 * This contract is not part of the pattern, in general case, each component
 * are not related
 */
interface MediaInterface
{
    /**
     * some crude rendering from JSON or html output (depended on concrete class).
     *
     * @return string
     */
    public function render();
}
