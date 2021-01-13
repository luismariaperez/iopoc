<?php

declare(strict_types=1);

namespace Tests\Challenge\Account\Domain;

use Challenge\Account\Domain\AccountCreatedEvent;
use Tests\Challenge\Shared\Domain\User\IdMother as UserIdMother;
use Shared\Domain\Bus\Event\DomainEvent;

class AccountCreatedEventMother
{
    public static function create(
        string $id,
        string $userId,
        string $locked
    ): DomainEvent {
        return AccountCreatedEvent::fromPrimitives(
            $id,
            [
                'userId' => $userId,
                'locked' => $locked,
            ]
        );
    }

    public static function random(): DomainEvent
    {
        return self::create(
            IdMother::random()->value(),
            UserIdMother::random()->value(),
            LockedMother::random()->value()
        );
    }
}