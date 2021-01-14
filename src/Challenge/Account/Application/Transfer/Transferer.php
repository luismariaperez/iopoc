<?php

declare(strict_types=1);

namespace Challenge\Account\Application\Transfer;

use Challenge\Account\Domain\Eth;
use Challenge\Account\Domain\Finder;
use Challenge\Account\Domain\Id;
use Challenge\Account\Domain\Receiver;
use Shared\Domain\Bus\Event\EventBus;

class Transferer
{
    private Finder $finder;
    private EventBus $bus;

    public function __construct(Finder $finder, EventBus $bus)
    {
        $this->finder = $finder;
        $this->bus = $bus;
    }

    public function __invoke(Id $id, Receiver $address, Eth $eth)
    {
        $account = $this->finder->__invoke($id);
        $account->transfer($address, $eth);

        $this->bus->publish(...$account->pullDomainEvents());
    }
}