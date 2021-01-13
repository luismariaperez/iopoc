<?php

declare(strict_types=1);

namespace Challenge\Account\Application\Complete;

use Challenge\Account\Domain\Address;
use Challenge\Account\Domain\Balance;
use Challenge\Account\Domain\Id;
use Ethereum\Account\Domain\AccountCreatedEvent;
use Shared\Domain\Bus\Event\DomainEventSubscriber;

class OnEthereumCreatedSubscriber implements DomainEventSubscriber
{
    private Completer $completer;

    public function __construct(Completer $completer)
    {
        $this->completer = $completer;
    }

    public static function subscribedTo(): array
    {
        return [AccountCreatedEvent::class];
    }

    public function __invoke(AccountCreatedEvent $event): void
    {
        $this->completer->__invoke(
            Id::create($event->aggregateId()),
            Address::create($event->address()),
            Balance::create($event->balance())
        );
    }
}