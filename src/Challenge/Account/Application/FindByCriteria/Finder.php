<?php

declare(strict_types=1);

namespace Challenge\Account\Application\FindByCriteria;

use Challenge\Account\Domain\Account;
use Challenge\Account\Domain\AccountNotFoundByCriteria;
use Challenge\Account\Domain\AccountRepository;
use Shared\Domain\Criteria\Criteria;

class Finder
{
    private AccountRepository $repository;

    public function __construct(AccountRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(Criteria $criteria): Account
    {
        $account = $this->repository->searchByCriteria($criteria);

        if (null === $account)
        {
            throw new AccountNotFoundByCriteria($criteria->field(), $criteria->value());
        }

        return $account;
    }
}