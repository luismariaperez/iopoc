<?php

declare(strict_types=1);

namespace Challenge\Account\Domain;

use Shared\Domain\ValueObject\FloatValueObject;

class Eth extends FloatValueObject
{
    public static function create(float $value): Eth
    {
        return new self($value);
    }
}