<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\Interpreter;

class OrExp extends AbstractExp
{
    private AbstractExp $first;
    private AbstractExp $second;

    public function __construct(AbstractExp $first, AbstractExp $second)
    {
        $this->first = $first;
        $this->second = $second;
    }

    public function interpret(Context $context): bool
    {
        return $this->first->interpret($context) || $this->second->interpret($context);
    }
}
