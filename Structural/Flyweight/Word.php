<?php

namespace DesignPatterns\Structural\Flyweight;

class Word implements Text
{
    public function __construct(private string $name)
    {
    }

    public function render(string $font): string
    {
        return sprintf('Word %s with font %s', $this->name, $font);
    }
}
