<?php

namespace DesignPatterns\More\EAV;

/**
 * Class Attribute
 */
class Attribute implements ValueAccessInterface
{
    /**
     * @var array|Value[]|ValueInterface[]
     */
    private $values = [];

    /**
     * @var string
     */
    private $name;

    /**
     * @return array|Value[]|ValueInterface[]
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @param Value|ValueInterface $value
     * @return $this
     */
    public function addValue(ValueInterface $value)
    {
        // @TODO I think the $value should be checked for uniqueness first to avoid duplication in array.
        $this->values[] = $value;

        return $this;
    }

    /**
     * @param Value|ValueInterface $value
     * @return $this
     */
    public function removeValue(ValueInterface $value)
    {
        $index = array_search($value, $this->values, true);

        if (false !== $index) {
            unset($this->values[$index]);
        }

        return $this;
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
