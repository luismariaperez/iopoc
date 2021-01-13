<?php

declare(strict_types=1);

namespace Challenge\Account\Application\Create;

use Challenge\Account\Domain\AccountRepository;
use Challenge\Account\Domain\Id;
use Shared\Domain\Bus\Event\EventBus;
use Challenge\Shared\Domain\User\Id as UserId;

class Creator
{
    private AccountRepository $repository;
    private EventBus $bus;

    public function __construct(AccountRepository $repository, EventBus $bus)
    {
        $this->repository = $repository;
        $this->bus = $bus;
    }

    public function __invoke(Id $id, UserId $userId)
    {

    }
}