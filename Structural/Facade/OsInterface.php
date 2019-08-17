<?php
declare(strict_types=1);

namespace DesignPatterns\Structural\Facade;

interface OsInterface
{
    public function halt();

    public function getName(): string;
}
