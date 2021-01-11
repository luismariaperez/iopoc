<?php

declare(strict_types=1);

namespace Challenge\User\Domain;

use Shared\Domain\ValueObject\StringValueObject;

class Email extends StringValueObject
{
    public static function create(string $value): Email
    {
        if(!filter_var($value, FILTER_VALIDATE_EMAIL))
        {
            throw new InvalidEmailError($value);
        }

        return new self($value);
    }
}