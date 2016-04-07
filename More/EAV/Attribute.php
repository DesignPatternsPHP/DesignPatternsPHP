<?php

namespace DesignPatterns\More\EAV;

use SplObjectStorage;

/**
 * Class Attribute.
 */
class Attribute implements ValueAccessInterface
{
    /**
     * @var SplObjectStorage
     */
    private $values;

    /**
     * @var string
     */
    private $name;

    public function __construct()
    {
        $this->values = new SplObjectStorage();
    }

    /**
     * @return SplObjectStorage
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @param ValueInterface $value
     *
     * @return $this
     */
    public function addValue(ValueInterface $value)
    {
        if (!$this->values->contains($value)) {
            $this->values->attach($value);
        }

        return $this;
    }

    /**
     * @param ValueInterface $value
     *
     * @return $this
     */
    public function removeValue(ValueInterface $value)
    {
        if ($this->values->contains($value)) {
            $this->values->detach($value);
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
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
