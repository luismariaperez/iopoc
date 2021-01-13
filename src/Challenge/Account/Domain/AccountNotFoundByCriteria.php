<?php

declare(strict_types=1);

namespace Challenge\Account\Domain;

use Shared\Domain\DomainError;

class AccountNotFoundByCriteria extends DomainError
{
    private string $field;
    private $value;

    public function __construct(string $field, $value)
    {
        $this->field = $field;
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
            "Account is not found by criteria <<%s: %s>> ",
           $this->field,
           (string) $this->value
        );
    }
}