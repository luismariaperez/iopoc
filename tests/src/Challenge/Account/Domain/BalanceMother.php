<?php

declare(strict_types=1);

namespace Tests\Challenge\Account\Domain;

use Challenge\Account\Domain\Balance;

class BalanceMother
{
    public static function create(float $balance): Balance
    {
        return Balance::create($balance);
    }

    public static function random(): Balance
    {
        return self::create(lcg_value());
    }
}