<?php

namespace DesignPatterns\Creational\AbstractFactory;

abstract class Text
{
    /**
     * @var string
     */
    protected $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }
}
