<?php

namespace DesignPatterns\Behavioral\Visitor;

/**
 * class Role.
 */
abstract class Role
{
    /**
     * This method handles a double dispatch based on the short name of the Visitor.
     *
     * Feel free to override it if your object must call another visiting behavior
     *
     * @param \DesignPatterns\Behavioral\Visitor\RoleVisitorInterface $visitor
     *
     * @throws \InvalidArgumentException
     */
    public function accept(RoleVisitorInterface $visitor)
    {
        // this trick to simulate double-dispatch based on type-hinting
        $klass = get_called_class();
        preg_match('#([^\\\\]+)$#', $klass, $extract);
        $visitingMethod = 'visit'.$extract[1];

        // this ensures strong typing with visitor interface, not some visitor objects
        if (!method_exists(__NAMESPACE__.'\RoleVisitorInterface', $visitingMethod)) {
            throw new \InvalidArgumentException("The visitor you provide cannot visit a $klass instance");
        }

        call_user_func(array($visitor, $visitingMethod), $this);
    }
}
