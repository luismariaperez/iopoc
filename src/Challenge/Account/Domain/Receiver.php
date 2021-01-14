<?php

declare(strict_types=1);

namespace Challenge\Account\Domain;

use Shared\Domain\ValueObject\StringValueObject;

class Receiver extends StringValueObject
{
    public static function create(string $address): Receiver
    {
        return new self($address);
    }
}