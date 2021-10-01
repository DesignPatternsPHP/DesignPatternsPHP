<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Visitor;

interface Role
{
    public function accept(RoleVisitor $visitor);
}
