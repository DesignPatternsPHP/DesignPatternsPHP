<?php

namespace DesignPatterns\Behavioral\Specification;

/**
 * A logical AND specification.
 */
class Plus extends AbstractSpecification
{
    protected $left;
    protected $right;

    /**
     * Creation of a logical AND of two specifications.
     *
     * @param SpecificationInterface $left
     * @param SpecificationInterface $right
     */
    public function __construct(SpecificationInterface $left, SpecificationInterface $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

    /**
     * Checks if the composite AND of specifications passes.
     *
     * @param Item $item
     *
     * @return bool
     */
    public function isSatisfiedBy(Item $item)
    {
        return $this->left->isSatisfiedBy($item) && $this->right->isSatisfiedBy($item);
    }
}
