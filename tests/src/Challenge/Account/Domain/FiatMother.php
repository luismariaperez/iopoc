<?php

declare(strict_types=1);

namespace Tests\Challenge\Account\Domain;

use Challenge\Account\Domain\Fiat;

class FiatMother
{
    public static function create(float $value): Fiat
    {
        return Fiat::create($value);
    }

    public static function random(): Fiat
    {
        return self::create(lcg_value());
    }
}