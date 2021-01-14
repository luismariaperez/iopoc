<?php

declare(strict_types=1);

namespace Ethereum\Account\Application\Sell;

use Ethereum\Account\Domain\Account;
use Ethereum\Account\Domain\Address;
use Ethereum\Account\Domain\Balance;
use Ethereum\Account\Domain\ECR20Repository;
use Ethereum\Account\Domain\Eth;
use Ethereum\Account\Domain\Id;
use Shared\Domain\Bus\Event\EventBus;

class Seller
{
    private ECR20Repository $repository;
    private EventBus $bus;

    public function __construct(ECR20Repository $repository, EventBus $bus)
    {
        $this->repository = $repository;
        $this->bus = $bus;
    }

    public function __invoke(Id $id, Address $address, Balance $balance, Eth $eth)
    {
        $account = Account::generateMockSell($id, $address, $balance, $eth);
        $this->repository->save($account);

        $this->bus->publish(...$account->pullDomainEvents());
    }
}