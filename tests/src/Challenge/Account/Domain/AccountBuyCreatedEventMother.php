<?php

declare(strict_types=1);

namespace Tests\Challenge\Account\Domain;

use Challenge\Account\Domain\AccountBuyCreatedEvent;
use Shared\Domain\Bus\Event\DomainEvent;
use Tests\Challenge\Shared\Domain\User\IdMother as UserIdMother;

class AccountBuyCreatedEventMother
{
    public static function create(
        string $id,
        string $userId,
        string $address,
        float $balance,
        string $locked,
        float $fiat
    ): DomainEvent {
        return AccountBuyCreatedEvent::fromPrimitives(
            $id,
            [
                'userId' => $userId,
                'address' => $address,
                'balance' => $balance,
                'locked' => $locked,
                'fiat' => $fiat
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
            FiatMother::random()->value()
        );
    }
}