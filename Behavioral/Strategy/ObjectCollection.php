<?php

namespace DesignPatterns\Behavioral\Strategy;

class ObjectCollection
{
    /**
     * @var array
     */
    private $elements;

    /**
     * @var ComparatorInterface
     */
    private $comparator;

    /**
     * @param array $elements
     */
    public function __construct(array $elements = [])
    {
        $this->elements = $elements;
    }

    public function sort(): array
    {
        if (!$this->comparator) {
            throw new \LogicException('Comparator is not set');
        }

        uasort($this->elements, [$this->comparator, 'compare']);

        return $this->elements;
    }

    /**
     * @param ComparatorInterface $comparator
     */
    public function setComparator(ComparatorInterface $comparator)
    {
        $this->comparator = $comparator;
    }
}
