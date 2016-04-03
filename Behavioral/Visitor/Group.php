<?php

namespace DesignPatterns\Behavioral\Visitor;

/**
 * An example of a Visitor: Group.
 */
class Group extends Role
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
        return 'Group: '.$this->name;
    }
}
