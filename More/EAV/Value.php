<?php

namespace DesignPatterns\More\EAV;

/**
 * Class Value.
 */
class Value implements ValueInterface
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
     * @param Attribute $attribute
     */
    public function __construct(Attribute $attribute)
    {
        $attribute->addValue($this);
        $this->attribute = $attribute;
    }

    /**
     * @param Attribute $attribute
     *
     * @return $this
     */
    public function setAttribute(Attribute $attribute)
    {
        $this->attribute->removeValue($this); // Remove value from current attribute
        $attribute->addValue($this); // Add value to new attribute
        $this->attribute = $attribute;

        return $this;
    }

    /**
     * @return Attribute
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
