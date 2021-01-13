<?php

declare(strict_types=1);

namespace Challenge\Account\Application\Create;

use Challenge\Account\Domain\Id;
use Challenge\Shared\Domain\User\Id as UserId;
use Challenge\User\Domain\UserCreatedEvent;
use Shared\Domain\Bus\Event\DomainEventSubscriber;

class OnUserCreatedSubscriber implements DomainEventSubscriber
{

    private Creator $creator;

    public function __construct(Creator $creator)
    {
        $this->creator = $creator;
    }

    public static function subscribedTo(): array
    {
        return [UserCreatedEvent::class];
    }

    public function __invoke(UserCreatedEvent $event)
    {
        $this->creator->__invoke(
            new Id(Id::random()->value()),
            new UserId($event->aggregateId())
        );
    }
}
