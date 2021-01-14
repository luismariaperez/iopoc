<?php

declare(strict_types=1);

namespace Challenge\Account\Domain;

use Shared\Domain\ValueObject\FloatValueObject;

class Balance extends FloatValueObject
{
    public static function create(float $balance): Balance
    {
        return new self($balance);
    }

    public function enough(Eth $eth): bool
    {
        return $this->value() >= $eth->value();
    }
}