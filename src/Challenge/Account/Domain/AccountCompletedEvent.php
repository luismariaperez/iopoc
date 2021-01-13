<?php

declare(strict_types=1);

namespace Challenge\Account\Domain;

use Shared\Domain\Bus\Event\DomainEvent;

class AccountCompletedEvent extends AccountEvent
{
    public static function eventName(): string
    {
        return 'challenge.account.completed';
    }

    public static function fromPrimitives(
        string $aggregateId,
        array $body,
        string $eventId = null,
        string $occurredOn = null
    ): DomainEvent {
        return new self(
            $aggregateId,
            $body['userId'],
            $body['address'],
            $body['balance'],
            $body['locked'],
            $eventId,
            $occurredOn
        );
    }
}