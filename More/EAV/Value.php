<?php declare(strict_types=1);

namespace DesignPatterns\More\EAV;

class Value
{
    /**
     * @var Attribute
     */
    private $attribute;

    /**
     * @var string
     */
    private $name;

    public function __construct(Attribute $attribute, string $name)
    {
        $this->name = $name;
        $this->attribute = $attribute;

        $attribute->addValue($this);
    }

    public function __toString(): string
    {
        return sprintf('%s: %s', (string) $this->attribute, $this->name);
    }
}
