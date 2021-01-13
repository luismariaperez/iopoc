<?php

declare(strict_types=1);

namespace Challenge\Account\Infastructure\Persistence;

use Challenge\Account\Domain\AccountRepository;
use Challenge\Account\Domain\Account;
use Challenge\Account\Domain\Id;
use Shared\Domain\Criteria\Criteria;
use Shared\Infrastructure\SerializedRepository\Serializer;

class AccountFileRepository extends Serializer implements AccountRepository
{
    private const FILE = "Accounts";

    public function __construct()
    {
        parent::__construct(self::FILE);
    }

    public function save(Account $account): void
    {
        $id = $account->id()->value();

        $entity = clone $account;
        $entity->pullDomainEvents();

        parent::saveEntity($id, $entity);

        parent::commit();
    }

    public function search(Id $id): ?Account
    {
        return $this->find($id->value());
    }

    public function searchByCriteria(Criteria $criteria): ?Account
    {

    }
}