<?php

namespace DesignPatterns\Structural\Facade;

interface OsInterface
{
    public function halt();

    public function getName(): string;
}
