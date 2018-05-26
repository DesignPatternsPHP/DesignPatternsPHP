<?php

use DesignPatterns\More\Money\Money;
use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    /**
     * Can we crete money from input strings?
     *
     * @throws \ReflectionException
     */
    public function testMoneyCanBeCreatedFromString()
    {
        $money = Money::fromString('EUR', 200);

        $reflector = new ReflectionClass($money);
        $method = $reflector->getMethod('getAmount');
        $method->setAccessible(true);
        $result = $method->invokeArgs($money, []);

        $this->assertEquals($result, 200);
    }

    /**
     * Test two money objects have equals values
     */
    public function testMoneyAmountIsEqual()
    {
        $money = Money::fromString('EUR', 300);
        $money1 = Money::fromString('EUR', 300);

        $this->assertTrue($money->equals($money1));
    }

    /**
     * Can we subtract two money objects?
     *
     * @throws \ReflectionException
     */
    public function testMoneyCanBeSubtracted()
    {
        $money = Money::fromString('EUR', 200);
        $money1 = Money::fromString('EUR', 882);
        $newAmount = $money->add($money1);

        $reflector = new ReflectionClass($newAmount);
        $method = $reflector->getMethod('getAmount');
        $method->setAccessible(true);
        $result = $method->invokeArgs($newAmount, []);

        $this->assertEquals($result, 1082);
    }

    /**
     * Can we create money instance using more friendly interface (static)
     *
     * @throws \ReflectionException
     */
    public function testMoneyAndCurrencyCanBeCreatedStatically()
    {
        $money = Money::fromString('EUR', 200);
        $newAmount = Money::EUR(150)->add($money);

        $reflector = new ReflectionClass($newAmount);
        $method = $reflector->getMethod('getAmount');
        $method->setAccessible(true);
        $result = $method->invokeArgs($newAmount, []);

        $this->assertEquals($result, 350);
    }
}
