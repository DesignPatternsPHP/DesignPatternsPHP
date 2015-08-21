<?php

namespace DesignPatterns\More\Delegation;

/**
 * Class JuniorDeveloper
 * @package DesignPatterns\Delegation
 */
class JuniorDeveloper implements Developer //TODO define that
{
    // this implements 'pure' method writeCode() --
    // it's what a TeamLead wants from his Developers
    public function writeCode() {
        //  but the only code Junior Developer 
        //  can offer – is bad one
        return $this->writeBadCode();    
    }
    
    private function writeBadCode()
    {
        return "Some junior developer generated code...";
    }
}
