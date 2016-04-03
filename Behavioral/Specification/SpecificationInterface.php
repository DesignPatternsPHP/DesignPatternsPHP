<?php

namespace DesignPatterns\Behavioral\Specification;

/**
 * An interface for a specification.
 */
interface SpecificationInterface
{
    /**
     * A boolean evaluation indicating if the object meets the specification.
     *
     * @param Item $item
     *
     * @return bool
     */
    public function isSatisfiedBy(Item $item);

    /**
     * Creates a logical AND specification.
     *
     * @param SpecificationInterface $spec
     */
    public function plus(SpecificationInterface $spec);

    /**
     * Creates a logical OR specification.
     *
     * @param SpecificationInterface $spec
     */
    public function either(SpecificationInterface $spec);

    /**
     * Creates a logical not specification.
     */
    public function not();
}
