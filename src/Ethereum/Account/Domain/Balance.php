<?php

declare(strict_types=1);

namespace Ethereum\Account\Domain;

use Shared\Domain\ValueObject\FloatValueObject;

class Balance extends FloatValueObject
{
    public static function create(float $balance): Balance
    {
        return new self($balance);
    }
}