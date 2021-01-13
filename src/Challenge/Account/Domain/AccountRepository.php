<?php

declare(strict_types=1);

namespace Challenge\Account\Domain;

interface AccountRepository
{
    public function save(Account $token): void;
    public function search(Id $address): ?Account;
}