<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Proxy;

class BankAccountProxy implements BankAccount
{
    private ?int $balance = null;

    private HeavyBankAccount $heavyBankAccount;

    public function __construct(HeavyBankAccount $heavyBankAccount)
    {
        $this->heavyBankAccount = $heavyBankAccount;
    }

    public function getBalance(): int
    {
        // because calculating balance is so expensive,
        // the usage of BankAccount::getBalance() is delayed until it really is needed
        // and will not be calculated again for this instance

        if ($this->balance === null) {
            $this->balance = $this->heavyBankAccount->getBalance();
        }

        return $this->balance;
    }

    public function deposit(int $amount)
    {
        $this->heavyBankAccount->deposit($amount);
    }
}
