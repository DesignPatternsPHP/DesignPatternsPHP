<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Interpreter\Tests;

use DesignPatterns\Behavioral\Interpreter\AndExp;
use DesignPatterns\Behavioral\Interpreter\Context;
use DesignPatterns\Behavioral\Interpreter\OrExp;
use DesignPatterns\Behavioral\Interpreter\VariableExp;
use PHPUnit\Framework\TestCase;

class InterpreterTest extends TestCase
{
    private Context $context;
    private VariableExp $a;
    private VariableExp $b;
    private VariableExp $c;

    public function setUp(): void
    {
        $this->context = new Context();
        $this->a = new VariableExp('A');
        $this->b = new VariableExp('B');
        $this->c = new VariableExp('C');
    }

    public function testOr()
    {
        $this->context->assign($this->a, false);
        $this->context->assign($this->b, false);
        $this->context->assign($this->c, true);

        // A ∨ B
        $exp1 = new OrExp($this->a, $this->b);
        $result1 = $exp1->interpret($this->context);

        $this->assertFalse($result1, 'A ∨ B must false');

        // $exp1 ∨ C
        $exp2 = new OrExp($exp1, $this->c);
        $result2 = $exp2->interpret($this->context);

        $this->assertTrue($result2, '(A ∨ B) ∨ C must true');
    }

    public function testAnd()
    {
        $this->context->assign($this->a, true);
        $this->context->assign($this->b, true);
        $this->context->assign($this->c, false);

        // A ∧ B
        $exp1 = new AndExp($this->a, $this->b);
        $result1 = $exp1->interpret($this->context);

        $this->assertTrue($result1, 'A ∧ B must true');

        // $exp1 ∧ C
        $exp2 = new AndExp($exp1, $this->c);
        $result2 = $exp2->interpret($this->context);

        $this->assertFalse($result2, '(A ∧ B) ∧ C must false');
    }
}
