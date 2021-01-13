<?php

declare(strict_types=1);

namespace Ethereum\Account\Domain;

use Shared\Domain\ValueObject\FloatValueObject;

class Fiat extends FloatValueObject
{
    public static function create(float $fiat): Fiat
    {
        return new self($fiat);
    }
}