<?php

namespace DesignPatterns\More\LazyLoading;

class Heavy
{
    /**
     * @var CallCounter
     */
    private $counter;

    public function __construct(CallCounter $counter)
    {
        $this->counter = $counter;
    }

    public function getHeavyData(): array
    {
        $this->counter->call();

        return [];
    }
}
