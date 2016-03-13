<?php

namespace DesignPatterns\Behavioral\Strategy;

/**
 * Class ComparatorInterface.
 */
interface ComparatorInterface
{
    /**
     * @param mixed $a
     * @param mixed $b
     *
     * @return bool
     */
    public function compare($a, $b);
}
