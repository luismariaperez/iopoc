<?php

declare(strict_types=1);

namespace Tests\Ethereum\Account\Domain;

use Ethereum\Account\Domain\AccountCreatedEvent;
use Shared\Domain\Bus\Event\DomainEvent;
use Shared\Domain\ValueObject\Uuid;
use Tests\Challenge\Account\Domain\AddressMother;
use Tests\Challenge\Account\Domain\BalanceMother;

class AccountCreatedEventMother
{
    public static function create(
        string $id,
        string $address,
        float $balance
    ): DomainEvent {
        return AccountCreatedEvent::fromPrimitives(
            $id,
            [
                'address' => $address,
                'balance' => $balance
            ]
        );
    }

    public static function random(): DomainEvent
    {
        return self::create(
            Uuid::random()->value(),
            AddressMother::random()->value(),
            BalanceMother::random()->value()
        );
    }
}