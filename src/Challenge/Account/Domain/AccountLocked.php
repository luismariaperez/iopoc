<?php

declare(strict_types=1);

namespace Challenge\Account\Domain;

use Shared\Domain\DomainError;

class AccountLocked extends DomainError
{
    private string $account;
    private string $reason;

    public function __construct(string $account, string $reason)
    {
        $this->account = $account;
        $this->reason = $reason;

        parent::__construct();
    }

    public function errorCode(): string
    {
        return 'account_locked';
    }

    protected function errorMessage(): string
    {
        return sprintf(
            "<%s> account is locked because %s operation",
            $this->account,
            $this->reason
        );
    }
}