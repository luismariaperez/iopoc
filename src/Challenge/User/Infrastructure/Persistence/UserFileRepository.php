<?php

declare(strict_types=1);

namespace Challenge\User\Infrastructure\Persistence;

use Challenge\User\Domain\User;
use Challenge\User\Domain\UserRepository;
use Shared\Infrastructure\SerializedRepository\Serializer;

class UserFileRepository extends Serializer implements UserRepository
{
    private const FILE = "Users";

    public function __construct()
    {
        parent::__construct(self::FILE);
    }

    public function save(User $user): void
    {
        $id = $user->id()->value();

        $entity = clone $user;
        $entity->pullDomainEvents();

        parent::saveEntity($id, $entity);

        parent::commit();
    }
}