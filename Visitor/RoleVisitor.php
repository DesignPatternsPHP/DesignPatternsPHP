<?php

namespace DesignPatterns\Visitor;

/**
 * Visitor Pattern
 *
 * The contract for the visitor
 */
interface RoleVisitor
{

    /**
     * Visit a user object
     * 
     * @param \DesignPatterns\Visitor\User $role
     */
    public function visitUser(User $role);

    /**
     * Visit a Group objet
     * 
     * @param \DesignPatterns\Visitor\Group $role
     */
    public function visitGroup(Group $role);
}
