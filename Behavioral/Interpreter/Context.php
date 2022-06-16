<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Interpreter;

use Exception;

class Context
{
    private array $poolVariable;

    public function lookUp(string $name): bool
    {
        if (!array_key_exists($name, $this->poolVariable)) {
            throw new Exception("no exist variable: $name");
        }

        return $this->poolVariable[$name];
    }

    public function assign(VariableExp $variable, bool $val)
    {
        $this->poolVariable[$variable->getName()] = $val;
    }
}
