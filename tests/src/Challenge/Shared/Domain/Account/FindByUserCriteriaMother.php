<?php

declare(strict_types=1);

namespace Tests\Challenge\Shared\Domain\Account;

use Challenge\Shared\Domain\Account\FindByUserCriteria;
use Tests\Challenge\Shared\Domain\User\IdMother;

class FindByUserCriteriaMother
{
    public static function create(string $value)
    {
        return new FindByUserCriteria($value);
    }

    public static function random()
    {
        return self::create(IdMother::random()->value());
    }
}