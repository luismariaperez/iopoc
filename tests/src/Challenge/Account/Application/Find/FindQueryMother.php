<?php

declare(strict_types=1);

namespace Tests\Challenge\Account\Application\Find;

use Challenge\Account\Application\Find\FindQuery;
use Tests\Challenge\Account\Domain\IdMother;

class FindQueryMother
{
    public static function create(string $id): FindQuery
    {
        return new FindQuery($id);
    }

    public static function random(): FindQuery
    {
        return self::create(IdMother::random()->value());
    }
}