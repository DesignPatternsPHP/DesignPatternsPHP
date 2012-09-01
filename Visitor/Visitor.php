<?php

namespace DesignPatterns;

/**
 * Visitor Pattern
 *
 * Purpose:
 * The Visitor Pattern lets you outsource operations on objects to other objects. The main reason to do this is to keep
 * a seperation of concerns. But classes have to define an interface to allow visitors (the "accept" method in the example below).
 *
 */
interface RoleVisitor {
    public function visit(Role $role);
}

interface Role {
    public function getName();
}

class RolePrintVisitor implements RoleVisitor {

    /**
     * @param Role $role
     */
    public function visit(Role $role) {
        echo "Role: " . $role->getName();
    }
}

class User implements Role {

    /**
     * @var string
     */
    protected $name;

    /**
     * @param string $name
     */
    public function __construct($name) {
        $this->name = (string) $name;
    }

    /**
     * @param RoleVisitor $visitor
     * @return void
     */
    public function accept(RoleVisitor $visitor) {
        $visitor->visit($this);
    }

    /**
     * @return string
     */
    public function getName() {
        return "User " . $this->name;
    }
}

class Group implements Role {

    /**
     * @var string
     */
    protected $name;

    /**
     * @param string $name
     */
    public function __construct($name) {
        $this->name = (string) $name;
    }

    /**
     * @param RoleVisitor $visitor
     * @return void
     */
    public function accept(RoleVisitor $visitor) {
        $visitor->visit($this);
    }

    /**
     * @return string
     */
    public function getName() {
        return "Group: " . $this->name;
    }
}

$user = new User("Dominik");
$group = new Group("Administrators");

$printer = new RolePrintVisitor();
$printer->visit($user);
$printer->visit($group);

