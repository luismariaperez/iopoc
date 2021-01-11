<?php

declare(strict_types=1);

namespace Tests\Challenge\Shared\Domain\User;

use Challenge\Shared\Domain\User\Id;
use Shared\Domain\ValueObject\Uuid;

class IdMother
{
    public static function create(string $id): Id
    {
        return new Id($id);
    }

    public static function random(): Id
    {
        return self::create(Uuid::random()->value());
    }
}