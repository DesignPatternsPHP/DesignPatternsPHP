<?php

namespace DesignPatterns\More\LazyLoading;

class CallCounter
{
    private $count = 0;

    public function call()
    {
        $this->count++;
    }

    public function getCount(): int
    {
        return $this->count;
    }
}
