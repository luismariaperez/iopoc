<?php

declare(strict_types=1);

namespace Challenge\Account\Domain;

use Shared\Domain\Bus\Event\DomainEvent;

class AccountCreatedEvent extends DomainEvent
{
    private string $userId;
    private string $locked;

    private function __construct(
        string $id,
        string $userId,
        string $locked,
        string $eventId = null,
        string $occurredOn = null
    ) {
        parent::__construct($id, $eventId, $occurredOn);

        $this->userId = $userId;
        $this->locked = $locked;
    }

    public static function eventName(): string
    {
        return 'challenge.account.created';
    }

    public function toPrimitives(): array
    {
        return [
            'id' => $this->aggregateId(),
            'userId' => $this->userId,
            'locked' => $this->locked,
        ];
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
            $body['locked'],
            $eventId,
            $occurredOn
        );
    }
    
    public function userId(): string
    {
        return $this->userId;
    }

    public function locked(): string
    {
        return $this->locked;
    }
}