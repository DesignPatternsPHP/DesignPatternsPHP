<?php

namespace DesignPatterns\Behavioral\Visitor;

interface Role
{
    public function accept(RoleVisitorInterface $visitor);
}
