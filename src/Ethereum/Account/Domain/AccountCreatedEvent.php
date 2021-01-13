<?php

declare(strict_types=1);

namespace Ethereum\Account\Domain;

use Shared\Domain\Bus\Event\DomainEvent;

class AccountCreatedEvent extends AccountEvent
{
    public static function eventName(): string
    {
        return 'ethereum.account.created';
    }

    public static function fromPrimitives(
        string $aggregateId,
        array $body,
        string $eventId = null,
        string $occurredOn = null
    ): DomainEvent {
        return new self(
            $aggregateId,
            $body['address'],
            $body['balance'],
            $eventId,
            $occurredOn
        );
    }
}