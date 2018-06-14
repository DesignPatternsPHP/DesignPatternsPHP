<?php

namespace DesignPatterns\More\LazyLoading;

class Holder
{
    /**
     * @var Heavy
     */
    private $heavy;

    /**
     * @var array|null
     */
    private $heavyData;

    public function __construct(Heavy $heavy)
    {
        $this->heavy = $heavy;
    }

    public function getHeavyData(): array
    {
        if ($this->heavyData === null) {
            $this->heavyData = $this->heavy->getHeavyData();
        }

        return $this->heavyData;
    }
}
