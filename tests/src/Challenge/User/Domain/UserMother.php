<?php

declare(strict_types=1);

namespace Tests\Challenge\User\Domain;

use Challenge\Shared\Domain\User\Id;
use Challenge\User\Domain\Email;
use Challenge\User\Domain\User;
use Tests\Challenge\Shared\Domain\User\IdMother;

class UserMother
{
    public static function create(Id $id, Email $email): User
    {
        return User::create($id, $email);
    }

    public static function random(): User
    {
        return self::create(IdMother::random(), EmailMother::random());
    }
}