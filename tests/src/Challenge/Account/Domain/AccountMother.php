<?php

declare(strict_types=1);

namespace Tests\Challenge\Account\Domain;

use Challenge\Account\Domain\Account;
use Challenge\Account\Domain\Address;
use Challenge\Account\Domain\Balance;
use Challenge\Account\Domain\Id;
use Challenge\Shared\Domain\User\Id as UserId;
use Tests\Challenge\Shared\Domain\User\IdMother as UserIdMother;

class AccountMother
{
    public static function create(
        Id $id,
        UserId $userId,
        Address $address,
        Balance $balance
    ): Account {
        $account = Account::createEmpty($id, $userId);
        $account->complete($address, $balance);

        return $account;
    }

    public static function createEmpty(Id $id, UserId $userId): Account
    {
        return Account::createEmpty($id, $userId);
    }

    public static function random(): Account
    {
        return self::create(
            IdMother::random(),
            UserIdMother::random(),
            AddressMother::random(),
            BalanceMother::random()
        );
    }

    public static function createEmptyRandom(): Account
    {
        return Account::createEmpty(IdMother::random(), UserIdMother::random());
    }
}