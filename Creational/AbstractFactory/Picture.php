<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Class Picture.
 */
abstract class Picture implements MediaInterface
{
    /**
     * @var string
     */
    protected $path;

    /**
     * @var string
     */
    protected $name;

    /**
     * @param string $path
     * @param string $name
     */
    public function __construct($path, $name = '')
    {
        $this->name = (string) $name;
        $this->path = (string) $path;
    }
}
