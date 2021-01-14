<?php

declare(strict_types=1);

namespace Challenge\Account\Domain;

use Shared\Domain\Bus\Event\DomainEvent;

class AccountBuyCreatedEvent extends AccountEvent
{
    protected float $fiat;

    protected function __construct(
        string $id,
        string $userId,
        string $address,
        float $balance,
        string $locked,
        float $fiat,
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

        $this->fiat = $fiat;
    }

    public static function eventName(): string
    {
        return 'challenge.account.buy_created';
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
            $body['fiat'],
            $eventId,
            $occurredOn
        );
    }

    public function fiat(): float
    {
        return $this->fiat;
    }
}