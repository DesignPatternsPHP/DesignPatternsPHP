<?php

namespace DesignPatterns\More\EAV;

class Value
{
    /**
     * @var Attribute
     */
    private $attribute;

    /**
     * @var string
     */
    private $name;

    /**
     * Value constructor.
     *
     * @param Attribute $attribute
     * @param string    $name
     */
    public function __construct(Attribute $attribute, string $name)
    {
        $this->name = $name;
        $this->attribute = $attribute;

        $attribute->addValue($this);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return sprintf('%s: %s', $this->attribute, $this->name);
    }
}
