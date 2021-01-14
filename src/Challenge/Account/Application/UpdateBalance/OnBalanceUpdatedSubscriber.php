<?php

declare(strict_types=1);

namespace Challenge\Account\Application\UpdateBalance;

use Challenge\Account\Domain\Balance;
use Challenge\Account\Domain\Id;
use Ethereum\Account\Domain\AccountBalanceUpdatedEvent;
use Shared\Domain\Bus\Event\DomainEventSubscriber;

class OnBalanceUpdatedSubscriber implements DomainEventSubscriber
{
    private Updater $updater;

    public function __construct(Updater $updater)
    {
        $this->updater = $updater;
    }

    public static function subscribedTo(): array
    {
        return [AccountBalanceUpdatedEvent::class];
    }

    public function __invoke(AccountBalanceUpdatedEvent $event): void
    {
        $this->updater->__invoke(
            Id::create($event->aggregateId()),
            Balance::create($event->balance())
        );
    }
}