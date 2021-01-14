<?php

declare(strict_types=1);

namespace Tests\Challenge\Account\Domain;

use Challenge\Account\Domain\AccountBalanceUpdatedEvent;
use Shared\Domain\Bus\Event\DomainEvent;
use Tests\Challenge\Shared\Domain\User\IdMother as UserIdMother;

class AccountBalanceUpdatedEventMother
{
    public static function create(
        string $id,
        string $userId,
        string $address,
        float $balance,
        string $locked
    ): DomainEvent {
        return AccountBalanceUpdatedEvent::fromPrimitives(
            $id,
            [
                'userId' => $userId,
                'address' => $address,
                'balance' => $balance,
                'locked' => $locked,
            ]
        );
    }

    public static function random(): DomainEvent
    {
        return self::create(
            IdMother::random()->value(),
            UserIdMother::random()->value(),
            AddressMother::random()->value(),
            BalanceMother::random()->value(),
            LockedMother::random()->value()
        );
    }
}