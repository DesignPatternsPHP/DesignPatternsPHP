<?php

namespace DesignPatterns\Visitor;

/**
 * Visitor Pattern
 *
 * One example for a visitee. Each visitee has to extends Role
 */
class User extends Role
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = (string) $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return "User " . $this->name;
    }
}
