<?php

namespace DesignPatterns\Behavioral\Specification;

/**
 * A logical OR specification.
 */
class Either extends AbstractSpecification
{
    protected $left;
    protected $right;

    /**
     * A composite wrapper of two specifications.
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
     * Returns the evaluation of both wrapped specifications as a logical OR.
     *
     * @param Item $item
     *
     * @return bool
     */
    public function isSatisfiedBy(Item $item)
    {
        return $this->left->isSatisfiedBy($item) || $this->right->isSatisfiedBy($item);
    }
}
