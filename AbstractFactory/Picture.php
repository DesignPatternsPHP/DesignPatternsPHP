<?php

namespace DesignPatterns\AbstractFactory;

/**
 * Class Picture
 *
 * @package DesignPatterns\AbstractFactory
 */
abstract class Picture implements Media
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
