<?php

declare(strict_types=1);

namespace Ethereum\Account\Application\Buy;

use Challenge\Account\Domain\AccountBuyCreatedEvent;
use Ethereum\Account\Domain\Address;
use Ethereum\Account\Domain\Balance;
use Ethereum\Account\Domain\Fiat;
use Ethereum\Account\Domain\Id;
use Shared\Domain\Bus\Event\DomainEventSubscriber;

class OnAccountBuyCreatedEventSubscriber implements DomainEventSubscriber
{
    private Buyer $buyer;

    public function __construct(Buyer $buyer)
    {
        $this->buyer = $buyer;
    }

    public static function subscribedTo(): array
    {
        return [AccountBuyCreatedEvent::class];
    }

    public function __invoke(AccountBuyCreatedEvent $event)
    {
        $this->buyer->__invoke(
            Id::create($event->aggregateId()),
            Address::create($event->address()),
            Balance::create($event->balance()),
            Fiat::create($event->fiat())
        );
    }
}