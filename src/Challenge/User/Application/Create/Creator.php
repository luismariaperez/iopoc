<?php

declare(strict_types=1);

namespace Challenge\User\Application\Create;

use Challenge\Shared\Domain\User\Id;
use Challenge\User\Domain\Email;
use Challenge\User\Domain\User;
use Challenge\User\Domain\UserRepository;
use Shared\Domain\Bus\Event\EventBus;

class Creator
{
    private UserRepository $repository;
    private EventBus $bus;

    public function __construct(UserRepository $repository, EventBus $bus)
    {
        $this->repository = $repository;
        $this->bus = $bus;
    }

    public function __invoke(Id $id, Email $email)
    {
        $user = User::create($id, $email);

        $this->repository->save($user);

        $this->bus->publish(...$user->pullDomainEvents());
    }
}