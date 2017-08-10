<?php

namespace DesignPatterns\Structural\Facade;

interface OsInterface
{
    public function halt();

    /**
     * @return string
     */
    public function getName(): string;
}
