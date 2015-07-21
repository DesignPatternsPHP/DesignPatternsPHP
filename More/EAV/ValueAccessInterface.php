<?php

namespace DesignPatterns\More\EAV;

/**
 * Interface ValueAccessInterface
 */
interface ValueAccessInterface
{
    /**
     * @return Value[]|ValueInterface[]|array
     */
    public function getValues();

    /**
     * @param Value|ValueInterface $value
     */
    public function addValue(ValueInterface $value);

    /**
     * @param Value|ValueInterface $value
     */
    public function removeValue(ValueInterface $value);
}
