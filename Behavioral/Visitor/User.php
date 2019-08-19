<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\Visitor;

class User implements Role
{
    /**
     * @var string
     */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return sprintf('User %s', $this->name);
    }

    public function accept(RoleVisitor $visitor)
    {
        $visitor->visitUser($this);
    }
}
