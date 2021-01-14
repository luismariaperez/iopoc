<?php

declare(strict_types=1);

namespace Tests\Ethereum\Account\Domain;

use Ethereum\Account\Domain\AccountBalanceUpdatedEvent;
use Shared\Domain\Bus\Event\DomainEvent;
use Tests\Challenge\Account\Domain\AddressMother;
use Tests\Challenge\Account\Domain\BalanceMother;
use Tests\Challenge\Account\Domain\IdMother;

class AccountBalanceUpdatedEventMother
{
    public static function create(string $id, string  $address, float $balance): DomainEvent
    {
        return AccountBalanceUpdatedEvent::fromPrimitives(
            $id,
            [
                'address' => $address,
                'balance' => $balance,
            ]
        );
    }

    public static function random(): DomainEvent
    {
        return self::create(
            IdMother::random()->value(),
            AddressMother::random()->value(),
            BalanceMother::random()->value()
        );
    }
}