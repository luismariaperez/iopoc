<?php

declare(strict_types=1);

namespace Ethereum\Account\Domain;

use Shared\Domain\ValueObject\FloatValueObject;

class Eth extends FloatValueObject
{
    public static function create(float $value)
    {
        return new self($value);
    }
}