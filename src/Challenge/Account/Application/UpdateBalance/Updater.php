<?php

declare(strict_types=1);

namespace Challenge\Account\Application\UpdateBalance;

use Challenge\Account\Domain\AccountRepository;
use Challenge\Account\Domain\Balance;
use Challenge\Account\Domain\Finder;
use Challenge\Account\Domain\Id;
use Shared\Domain\Bus\Event\EventBus;

class Updater
{
    private AccountRepository $repository;
    private Finder $finder;
    private EventBus $bus;

    public function __construct(AccountRepository $repository, Finder $finder, EventBus $bus)
    {
        $this->repository = $repository;
        $this->finder = $finder;
        $this->bus = $bus;
    }

    public function __invoke(Id $id, Balance $balance): void
    {
        $account = $this->finder->__invoke($id);
        $account->updateBalance($balance);

        $this->repository->save($account);
        $this->bus->publish(...$account->pullDomainEvents());
    }
}