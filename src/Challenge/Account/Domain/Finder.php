<?php

declare(strict_types=1);

namespace Challenge\Account\Domain;

class Finder
{
    private AccountRepository $repository;

    public function __construct(AccountRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(Id $id): Account
    {
        $account = $this->repository->search($id);

        if (null === $account)
        {
            throw new AccountNotFound($id->value());
        }

        return $account;
    }
}