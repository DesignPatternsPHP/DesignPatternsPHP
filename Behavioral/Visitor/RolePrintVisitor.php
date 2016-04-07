<?php

namespace DesignPatterns\Behavioral\Visitor;

/**
 * Visitor Pattern.
 *
 * An implementation of a concrete Visitor
 */
class RolePrintVisitor implements RoleVisitorInterface
{
    /**
     * {@inheritdoc}
     */
    public function visitGroup(Group $role)
    {
        echo 'Role: '.$role->getName();
    }

    /**
     * {@inheritdoc}
     */
    public function visitUser(User $role)
    {
        echo 'Role: '.$role->getName();
    }
}
