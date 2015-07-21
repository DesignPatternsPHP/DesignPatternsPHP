<?php

namespace DesignPatterns\More\EAV;

/**
 * Interface ValueInterface
 */
interface ValueInterface
{
    /**
     * @param Attribute $attribute
     */
    public function __construct(Attribute $attribute);

    /**
     * @return Attribute
     */
    public function getAttribute();
}
