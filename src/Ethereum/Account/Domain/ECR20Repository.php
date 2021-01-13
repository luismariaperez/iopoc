<?php

declare(strict_types=1);

namespace Ethereum\Account\Domain;

interface ECR20Repository
{
    public function save(Account $token): void;
    public function search(Address $address): Account;
}