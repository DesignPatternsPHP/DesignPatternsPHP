<?php

namespace DesignPatterns\Behavioral\Strategy;

class Context
{
    /**
     * @var ComparatorInterface
     */
    private $comparator;

    /**
     * Context constructor.
     *
     * @param ComparatorInterface $comparator
     */
    public function __construct(ComparatorInterface $comparator)
    {
        $this->comparator = $comparator;
    }

    /**
     * @param array $elements
     *
     * @return array
     */
    public function executeStrategy(array $elements) : array
    {
        uasort($elements, [$this->comparator, 'compare']);

        return $elements;
    }
}