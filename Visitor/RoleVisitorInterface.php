<?php

namespace DesignPatterns\Visitor;

/**
 * Visitor Pattern
 *
 * The contract for the visitor.
 * 
 * Note 1 : in C++ or java, with method polymorphism based on type-hint, there are many
 * methods visit() with different type for the 'role' parameter.
 * 
 * Note 2 : the visitor must not choose itself which method to
 * invoke, it is the Visitee that make this decision.
 */
interface RoleVisitorInterface
{
    /**
     * Visit a User object
     * 
     * @param \DesignPatterns\Visitor\User $role
     */
    public function visitUser(User $role);

    /**
     * Visit a Group object
     * 
     * @param \DesignPatterns\Visitor\Group $role
     */
    public function visitGroup(Group $role);
}
