<?php

declare(strict_types=1);

namespace DesignPatterns\More\EAV;

use SplObjectStorage;

class Entity implements \Stringable
{
    /**
     * @var SplObjectStorage<Value,Value>
     */
    private $values;

    /**
     * @param Value[] $values
     */
    public function __construct(private string $name, array $values)
    {
        $this->values = new SplObjectStorage();

        foreach ($values as $value) {
            $this->values->attach($value);
        }
    }

    public function __toString(): string
    {
        $text = [$this->name];

        foreach ($this->values as $value) {
            $text[] = (string) $value;
        }

        return join(', ', $text);
    }
}
