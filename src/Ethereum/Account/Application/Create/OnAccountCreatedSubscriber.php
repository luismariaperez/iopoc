<?php

declare(strict_types=1);

namespace Ethereum\Account\Application\Create;

use Challenge\Account\Domain\AccountCreatedEvent;
use Ethereum\Account\Domain\Id;
use Shared\Domain\Bus\Event\DomainEventSubscriber;

class OnAccountCreatedSubscriber implements DomainEventSubscriber
{
    private Creator $creator;

    public function __construct(Creator $creator)
    {
        $this->creator = $creator;
    }

    public static function subscribedTo(): array
    {
        return [AccountCreatedEvent::class];
    }

    public function __invoke(AccountCreatedEvent $event)
    {
        $this->creator->__invoke(
            Id::create($event->aggregateId())
        );
    }
}