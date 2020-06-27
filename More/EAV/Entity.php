<?php declare(strict_types=1);

namespace DesignPatterns\More\EAV;

use SplObjectStorage;

class Entity
{
    /**
     * @var SplObjectStorage<Value,Value>
     */
    private $values;

    /**
     * @var string
     */
    private string $name;

    /**
     * @param string $name
     * @param Value[] $values
     */
    public function __construct(string $name, $values)
    {
        /** @var SplObjectStorage<Value,Value> values */
        $this->values = new SplObjectStorage();
        $this->name = $name;

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
