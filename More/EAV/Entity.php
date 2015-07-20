<?php

namespace DesignPatterns\More\EAV;

/**
 * Class Entity
 */
class Entity implements ValueInterface
{
    /**
     * @var Value[]|ValueInterface[]|array
     */
    private $values = [];

    /**
     * @var string
     */
    private $name;

    /**
     * @return Value[]|ValueInterface[]|array
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
        if ($key = array_search($value, $this->values, true)) {
            unset($this->values[$key]);
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
