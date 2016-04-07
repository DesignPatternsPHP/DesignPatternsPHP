<?php

namespace DesignPatterns\Behavioral\Specification;

/**
 * An abstract specification allows the creation of wrapped specifications.
 */
abstract class AbstractSpecification implements SpecificationInterface
{
    /**
     * Checks if given item meets all criteria.
     *
     * @param Item $item
     *
     * @return bool
     */
    abstract public function isSatisfiedBy(Item $item);

    /**
     * Creates a new logical AND specification.
     *
     * @param SpecificationInterface $spec
     *
     * @return SpecificationInterface
     */
    public function plus(SpecificationInterface $spec)
    {
        return new Plus($this, $spec);
    }

    /**
     * Creates a new logical OR composite specification.
     *
     * @param SpecificationInterface $spec
     *
     * @return SpecificationInterface
     */
    public function either(SpecificationInterface $spec)
    {
        return new Either($this, $spec);
    }

    /**
     * Creates a new logical NOT specification.
     *
     * @return SpecificationInterface
     */
    public function not()
    {
        return new Not($this);
    }
}
