<?php

namespace DesignPatterns\Structural\Composite;

class TextElement implements RenderableInterface
{
    /**
     * @var string
     */
    private $text;

    /**
     * TextElement constructor.
     *
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function render(): string
    {
        return $this->text;
    }
}
