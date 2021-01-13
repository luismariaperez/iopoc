<?php

declare(strict_types=1);

namespace Challenge\Account\Infastructure\Persistence;

use Challenge\Account\Domain\AccountRepository;
use Challenge\Account\Domain\Account;
use Challenge\Account\Domain\Id;
use Challenge\Shared\Domain\Account\FindByUserCriteria;
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
        switch ($criteria->field()) {
            case FindByUserCriteria::FIELD:
                return $this->findByUser($criteria);
            default:
                return null;
        }

    }

    /** It just returns one for the challenge */
    public function findByUser(Criteria $criteria): ?Account
    {
        $accounts = array_filter(parent::findAll(), function (Account $account) use ($criteria) {
            return $account->userId()->value() == $criteria->value();
        });

        return empty($accounts) ? null : array_pop($accounts);
    }
}