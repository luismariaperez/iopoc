<?php

declare(strict_types=1);

namespace Ethereum\Account\Application\Transfer;

use Challenge\Account\Domain\AccountTransferCreatedEvent;
use Ethereum\Account\Domain\Address;
use Ethereum\Account\Domain\Balance;
use Ethereum\Account\Domain\Fiat;
use Ethereum\Account\Domain\Id;
use Shared\Domain\Bus\Event\DomainEventSubscriber;

class OnAccountTransferCreatedSubscriber implements DomainEventSubscriber
{
    private Transferer $transferer;

    public function __construct(Transferer $transferer)
    {
        $this->transferer = $transferer;
    }

    public static function subscribedTo(): array
    {
        return [AccountTransferCreatedEvent::class];
    }

    public function __invoke(AccountTransferCreatedEvent $event)
    {
        $this->transferer->__invoke(
            Id::create($event->aggregateId()),
            Address::create($event->address()),
            Balance::create($event->balance()),
            Fiat::create($event->fiat())
        );
    }
}