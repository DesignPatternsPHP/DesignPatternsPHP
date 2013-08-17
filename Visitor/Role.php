<?php

namespace DesignPatterns\Visitor;

/**
 * Visitor Pattern
 *
 * Purpose:
 * The Visitor Pattern lets you outsource operations on objects to other objects. The main reason to do this is to keep
 * a seperation of concerns. But classes have to define an contract to allow visitors (the "accept" method in the example below).
 * 
 * The contract is an abstract class but you can have also a clean interface
 */
abstract class Role
{

    /**
     * This method handle a double dispatch based on the shortname of the Visitee
     * 
     * Feel free to override it if your object must call another visiting behavior
     * 
     * @param \DesignPatterns\Visitor\RoleVisitor $visitor
     */
    public function accept(RoleVisitor $visitor)
    {
        // this trick to simulate double-dispatch based on type-hinting
        $fqcn = get_called_class();
        preg_match('#([^\\\\]+)$#', $fqcn, $extract);
        $visitingMethod = 'visit' . $extract[1];

        if (!method_exists($visitor, $visitingMethod)) {
            throw new \InvalidArgumentException("The visitor you provide cannot visit a $fqcn object");
        }

        call_user_func(array($visitor, $visitingMethod), $this);
    }

}
