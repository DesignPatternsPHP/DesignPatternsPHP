<?php

namespace DesignPatterns\Behavioral\Visitor;

interface Role
{
    /**
     * @param RoleVisitorInterface $visitor
     *
     * @return mixed
     */
    public function accept(RoleVisitorInterface $visitor);
}
