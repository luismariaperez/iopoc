<?php

declare(strict_types=1);

namespace Challenge\Account\Application\Buy;

use Challenge\Account\Domain\Fiat;
use Challenge\Account\Domain\Finder;
use Challenge\Account\Domain\Id;
use Shared\Domain\Bus\Event\EventBus;

class Buyer
{
    private Finder $finder;
    private EventBus $bus;

    public function __construct(Finder $finder, EventBus $bus)
    {
        $this->finder = $finder;
        $this->bus = $bus;
    }

    public function __invoke(Id $id, Fiat $fiat): void
    {
        $account = $this->finder->__invoke($id);
        $account->buy($fiat);

        $this->bus->publish(...$account->pullDomainEvents());
    }
}