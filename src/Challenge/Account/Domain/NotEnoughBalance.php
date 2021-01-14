<?php

declare(strict_types=1);

namespace Challenge\Account\Domain;

use Shared\Domain\DomainError;

class NotEnoughBalance extends DomainError
{
    private string $account;

    public function __construct(string $account)
    {
        $this->account = $account;

        parent::__construct();
    }

    public function errorCode(): string
    {
        return 'account_not_enough_balance';
    }

    protected function errorMessage(): string
    {
        return sprintf(
            "<%s> account has not enough balance",
            $this->account
        );
    }
}