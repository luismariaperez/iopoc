<?php

declare(strict_types=1);

namespace Challenge\Account\Domain;

use Shared\Domain\Criteria\Criteria;

interface AccountRepository
{
    public function save(Account $token): void;
    public function search(Id $address): ?Account;
    public function searchByCriteria(Criteria $criteria): ?Account;
}