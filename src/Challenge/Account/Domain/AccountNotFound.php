<?php

declare(strict_types=1);

namespace Challenge\Account\Domain;

use Shared\Domain\DomainError;

class AccountNotFound extends DomainError
{
    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;

        parent::__construct();
    }

    public function errorCode(): string
    {
        return 'account_not_found';
    }

    protected function errorMessage(): string
    {
        return sprintf(
            "<%s> account is not found",
            $this->value
        );
    }
}