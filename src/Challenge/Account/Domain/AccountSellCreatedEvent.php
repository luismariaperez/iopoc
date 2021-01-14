<?php

declare(strict_types=1);

namespace Challenge\Account\Domain;

use Shared\Domain\Bus\Event\DomainEvent;

class AccountSellCreatedEvent extends AccountEvent
{
    protected float $eth;

    protected function __construct(
        string $id,
        string $userId,
        string $address,
        float $balance,
        string $locked,
        float $eth,
        string $eventId = null,
        string $occurredOn = null
    ) {
        parent::__construct(
            $id,
            $userId,
            $address,
            $balance,
            $locked,
            $eventId,
            $occurredOn
        );

        $this->eth = $eth;
    }

    public static function eventName(): string
    {
        return 'challenge.account.sell_created';
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
            $body['eth'],
            $eventId,
            $occurredOn
        );
    }

    public function eth(): float
    {
        return $this->eth;
    }
}