<?php

declare(strict_types=1);

namespace Tests\Challenge\Account\Domain;

use Challenge\Account\Domain\Locked;

class LockedMother
{
    public static function create(string $locked): Locked
    {
        return new Locked($locked);
    }

    public static function random(): Locked
    {
        return Locked::randomValue();
    }
}