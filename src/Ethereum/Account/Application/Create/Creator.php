<?php

declare(strict_types=1);

namespace Ethereum\Account\Application\Create;

use Ethereum\Account\Domain\Account;
use Ethereum\Account\Domain\ECR20Repository;
use Ethereum\Account\Domain\Id;
use Shared\Domain\Bus\Event\EventBus;

class Creator
{
    private ECR20Repository $repository;
    private EventBus $bus;

    public function __construct(ECR20Repository $repository, EventBus $bus)
    {
        $this->repository = $repository;
        $this->bus = $bus;
    }

    public function __invoke(Id $id)
    {
        $account = Account::generateMockAccount(
            $id
        );

        $this->repository->save($account);

        $this->bus->publish(...$account->pullDomainEvents());
    }
}