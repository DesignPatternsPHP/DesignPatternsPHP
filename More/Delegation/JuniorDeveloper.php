<?php

namespace DesignPatterns\More\Delegation;

class JuniorDeveloper
{
    /**
     * @return string
     */
    public function writeBadCode(): string
    {
        return 'Some junior developer generated code...';
    }
}
