<?php

declare(strict_types=1);

namespace Tests\Challenge\Account\Domain;

use Challenge\Account\Domain\AccountTransferCreatedEvent;
use Shared\Domain\Bus\Event\DomainEvent;
use Tests\Challenge\Shared\Domain\User\IdMother as UserIdMother;

class AccountTransferCreatedEventMother
{
    public static function create(
        string $id,
        string $userId,
        string $address,
        float $balance,
        string $locked,
        float $eth,
        string $receiver
    ): DomainEvent {
        return AccountTransferCreatedEvent::fromPrimitives(
            $id,
            [
                'userId' => $userId,
                'address' => $address,
                'balance' => $balance,
                'locked' => $locked,
                'eth' => $eth,
                'receiver' => $receiver
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
            EthMother::random()->value(),
            ReceiverMother::random()->value()
        );
    }
}