<?php

namespace DesignPatterns\More\EAV;

/**
 * Interface ValueAccessInterface.
 */
interface ValueAccessInterface
{
    /**
     * @return \SplObjectStorage
     */
    public function getValues();

    /**
     * @param ValueInterface $value
     */
    public function addValue(ValueInterface $value);

    /**
     * @param ValueInterface $value
     */
    public function removeValue(ValueInterface $value);
}
