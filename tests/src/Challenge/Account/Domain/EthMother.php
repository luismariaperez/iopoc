<?php

declare(strict_types=1);

namespace Tests\Challenge\Account\Domain;

use Challenge\Account\Domain\Eth;

class EthMother
{
    public static function create(float $value): Eth
    {
        return Eth::create($value);
    }

    public static function random(): Eth
    {
        return self::create(lcg_value());
    }
}