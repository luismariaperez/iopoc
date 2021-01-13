<?php

declare(strict_types=1);

namespace Challenge\Account\Domain;

use Shared\Domain\Bus\Event\DomainEvent;

abstract class AccountEvent extends DomainEvent
{
    protected string $userId;
    protected string $address;
    protected float $balance;
    protected string $locked;

    protected function __construct(
        string $id,
        string $userId,
        string $address,
        float $balance,
        string $locked,
        string $eventId = null,
        string $occurredOn = null
    ) {
        parent::__construct($id, $eventId, $occurredOn);

        $this->userId = $userId;
        $this->address = $address;
        $this->balance = $balance;
        $this->locked = $locked;
    }

    abstract public static function eventName(): string;

    public function toPrimitives(): array
    {
        return [
            'id' => $this->aggregateId(),
            'userId' => $this->userId,
            'address' => $this->address,
            'balance' => $this->balance,
            'locked' => $this->locked,
        ];
    }

    abstract public static function fromPrimitives(
        string $aggregateId,
        array $body,
        string $eventId = null,
        string $occurredOn = null
    ): DomainEvent;

    public function userId(): string
    {
        return $this->userId;
    }

    public function address(): string
    {
        return $this->address;
    }

    public function balance(): float
    {
        return $this->balance;
    }

    public function locked(): string
    {
        return $this->locked;
    }
}