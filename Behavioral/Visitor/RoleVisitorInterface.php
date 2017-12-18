<?php

namespace DesignPatterns\Behavioral\Visitor;

/**
 * Note: the visitor must not choose itself which method to
 * invoke, it is the Visitee that make this decision
 */
interface RoleVisitorInterface
{
    /**
     * @param User $role
     *
     * @return mixed
     */
    public function visitUser(User $role);

    /**
     * @param Group $role
     *
     * @return mixed
     */
    public function visitGroup(Group $role);
}
