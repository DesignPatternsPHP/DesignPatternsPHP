<?php

declare(strict_types=1);

namespace DesignPatterns\More\EAV;

use SplObjectStorage;

class Attribute implements \Stringable
{
    private SplObjectStorage $values;

    public function __construct(private string $name)
    {
        $this->values = new SplObjectStorage();
    }

    public function addValue(Value $value): void
    {
        $this->values->attach($value);
    }

    public function getValues(): SplObjectStorage
    {
        return $this->values;
    }

    public function __toString(): string
    {
        return $this->name;
    }
}
