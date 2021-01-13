<?php

declare(strict_types=1);

namespace Ethereum\Account\Domain;

use Shared\Domain\Bus\Event\DomainEvent;

abstract class AccountEvent extends DomainEvent
{
    private string $address;
    private float $balance;

    protected function __construct(
        string $id,
        string $address,
        float $balance,
        string $eventId = null,
        string $occurredOn = null
    ) {
        parent::__construct($id, $eventId, $occurredOn);

        $this->address = $address;
        $this->balance = $balance;
    }

    abstract public static function eventName(): string;

    public function toPrimitives(): array
    {
        return [
            'id' => $this->aggregateId(),
            'address' => $this->address,
            'balance' => $this->balance,
        ];
    }

    abstract public static function fromPrimitives(
        string $aggregateId,
        array $body,
        string $eventId = null,
        string $occurredOn = null
    ): DomainEvent;

    public function address(): string
    {
        return $this->address;
    }

    public function balance(): float
    {
        return $this->balance;
    }
}