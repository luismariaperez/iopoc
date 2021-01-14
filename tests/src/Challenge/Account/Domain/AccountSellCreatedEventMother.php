<?php

declare(strict_types=1);

namespace Tests\Challenge\Account\Domain;

use Challenge\Account\Domain\AccountSellCreatedEvent;
use Shared\Domain\Bus\Event\DomainEvent;
use Tests\Challenge\Shared\Domain\User\IdMother as UserIdMother;

class AccountSellCreatedEventMother
{
    public static function create(
        string $id,
        string $userId,
        string $address,
        float $balance,
        string $locked,
        float $eth
    ): DomainEvent {
        return AccountSellCreatedEvent::fromPrimitives(
            $id,
            [
                'userId' => $userId,
                'address' => $address,
                'balance' => $balance,
                'locked' => $locked,
                'eth' => $eth
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
            LockedMother::random()->value(),
            EthMother::random()->value()
        );
    }
}