<?php

declare(strict_types=1);

namespace Tests\Challenge\User\Domain;

use Challenge\User\Domain\UserCreatedEvent;
use Shared\Domain\Bus\Event\DomainEvent;
use Tests\Challenge\Shared\Domain\User\IdMother;

class UserCreatedEventMother
{
    public static function create(string $aggregateId, string $email): DomainEvent
    {
        return UserCreatedEvent::fromPrimitives(
            $aggregateId,
            [
                'email' => $email
            ]
        );
    }

    public static function random(): DomainEvent
    {
        return self::create(
            IdMother::random()->value(),
            EmailMother::random()->value()
        );
    }
}