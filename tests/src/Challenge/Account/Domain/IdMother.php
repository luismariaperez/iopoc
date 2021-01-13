<?php

declare(strict_types=1);

namespace Tests\Challenge\Account\Domain;

use Challenge\Account\Domain\Id;
use Shared\Domain\ValueObject\Uuid;

class IdMother
{
    public static function create(string $id): Id
    {
        return Id::create($id);
    }

    public static function random(): Id
    {
        return self::create(Uuid::random()->value());
    }
}