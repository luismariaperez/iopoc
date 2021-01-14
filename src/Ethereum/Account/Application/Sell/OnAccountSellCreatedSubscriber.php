<?php

declare(strict_types=1);

namespace Ethereum\Account\Application\Sell;

use Challenge\Account\Domain\AccountSellCreatedEvent;
use Ethereum\Account\Domain\Address;
use Ethereum\Account\Domain\Balance;
use Ethereum\Account\Domain\Eth;
use Ethereum\Account\Domain\Id;
use Shared\Domain\Bus\Event\DomainEventSubscriber;

class OnAccountSellCreatedSubscriber implements DomainEventSubscriber
{
    private Seller $seller;

    /**
     * OnAccountWithdrawCreatedSubscriber constructor.
     * @param Seller $seller
     */
    public function __construct(Seller $seller)
    {
        $this->seller = $seller;
    }

    public static function subscribedTo(): array
    {
        return [AccountSellCreatedEvent::class];
    }

    public function __invoke(AccountSellCreatedEvent $event)
    {
        $this->seller->__invoke(
            Id::create($event->aggregateId()),
            Address::create($event->address()),
            Balance::create($event->balance()),
            Eth::create($event->eth())
        );
    }
}