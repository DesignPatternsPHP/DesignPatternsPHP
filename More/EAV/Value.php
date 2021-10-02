<?php

declare(strict_types=1);

namespace DesignPatterns\More\EAV;

class Value implements \Stringable
{
    public function __construct(private Attribute $attribute, private string $name)
    {
        $attribute->addValue($this);
    }

    public function __toString(): string
    {
        return sprintf('%s: %s', (string) $this->attribute, $this->name);
    }
}
