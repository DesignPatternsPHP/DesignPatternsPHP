<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\Strategy;

class Context
{
    /**
     * @var Comparator
     */
    private $comparator;

    public function __construct(Comparator $comparator)
    {
        $this->comparator = $comparator;
    }

    public function executeStrategy(array $elements) : array
    {
        uasort($elements, [$this->comparator, 'compare']);

        return $elements;
    }
}
