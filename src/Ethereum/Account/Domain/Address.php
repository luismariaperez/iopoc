<?php

declare(strict_types=1);

namespace Ethereum\Account\Domain;

use Shared\Domain\ValueObject\StringValueObject;

class Address extends StringValueObject
{
    public static function create(string $address): Address
    {
        return new self($address);
    }
}