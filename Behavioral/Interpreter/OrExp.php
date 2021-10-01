<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Interpreter;

/**
 * This NoTerminalExpression
 */
class OrExp extends AbstractExp
{
    public function __construct(private AbstractExp $first, private AbstractExp $second)
    {
    }

    public function interpret(Context $context): bool
    {
        return $this->first->interpret($context) || $this->second->interpret($context);
    }
}
