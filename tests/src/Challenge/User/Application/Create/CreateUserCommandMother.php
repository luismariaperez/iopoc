<?php

declare(strict_types=1);

namespace Tests\Challenge\User\Application\Create;

use Challenge\User\Application\Create\CreateUserCommand;
use Tests\Challenge\Shared\Domain\User\IdMother;
use Tests\Challenge\User\Domain\EmailMother;

class CreateUserCommandMother
{
    public static function create(string $id, string $email): CreateUserCommand
    {
        return new CreateUserCommand($id, $email);
    }

    public static function random(): CreateUserCommand
    {
        return self::create(
            IdMother::random()->value(),
            EmailMother::random()->value(),
        );
    }

}