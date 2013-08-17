<?php

namespace DesignPatterns\Visitor;

/**
 * Visitor Pattern
 *
 * An implementation of a Visitor
 */
class RolePrintVisitor implements RoleVisitor
{

    public function visitGroup(Group $role)
    {
        echo "Role: " . $role->getName();
    }

    public function visitUser(User $role)
    {
        echo "Role: " . $role->getName();
    }

}
