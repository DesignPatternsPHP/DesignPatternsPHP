<?php
declare(strict_types = 1);

namespace DesignPatterns\Creational\Prototype;

/**
 * Class BookPrototype
 * @package DesignPatterns\Creational\Prototype
 */
abstract class BookPrototype
{
    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $category;

    /**
     * @abstract
     */
    abstract public function __clone();

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
}
