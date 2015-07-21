<?php

namespace DesignPatterns\More\EAV;

/**
 * Class Value
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
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
