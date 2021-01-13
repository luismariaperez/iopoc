<?php

declare(strict_types=1);

namespace Challenge\User\Domain;

use Shared\Domain\Bus\Event\DomainEvent;

class UserCreatedEvent extends DomainEvent
{
    private string $email;

    private function __construct(
        string $id,
        string $email,
        string $eventId = null,
        string $occurredOn = null
    ) {
        parent::__construct($id, $eventId, $occurredOn);

        $this->email = $email;
    }

    public static function eventName(): string
    {
        return 'challenge.user.created';
    }

    public function toPrimitives(): array
    {
        return [
            'email' => $this->email
        ];
    }

    public static function fromPrimitives(
        string $aggregateId,
        array $body,
        string $eventId = null,
        string $occurredOn = null
    ): DomainEvent {
        return new self($aggregateId, $body['email'], $eventId, $occurredOn);
    }

    public function email(): string
    {
        return $this->email;
    }
}