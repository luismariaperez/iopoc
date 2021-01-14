<?php

declare(strict_types=1);

namespace Challenge\Account\Application\Sell;

use Challenge\Account\Domain\Eth;
use Challenge\Account\Domain\Finder;
use Challenge\Account\Domain\Id;
use Shared\Domain\Bus\Event\EventBus;

class Seller
{
    private Finder $finder;
    private EventBus $bus;

    public function __construct(Finder $finder, EventBus $bus)
    {
        $this->finder = $finder;
        $this->bus = $bus;
    }

    public function __invoke(Id $id, Eth $eth): void
    {
        $account = $this->finder->__invoke($id);
        $account->sell($eth);

        $this->bus->publish(...$account->pullDomainEvents());
    }
}