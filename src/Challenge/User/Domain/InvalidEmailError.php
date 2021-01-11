<?php

declare(strict_types=1);

namespace Challenge\User\Domain;

use Shared\Domain\DomainError;

class InvalidEmailError extends DomainError
{
    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;

        parent::__construct();
    }

    public function errorCode(): string
    {
        return 'invalid_email';
    }

    protected function errorMessage(): string
    {
        return sprintf(
            "<%s> is an invalid email",
            $this->value
        );
    }
}