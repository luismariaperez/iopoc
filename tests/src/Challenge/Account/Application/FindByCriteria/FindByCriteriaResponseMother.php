<?php

declare(strict_types=1);

namespace Tests\Challenge\Account\Application\FindByCriteria;

use Challenge\Account\Application\FindByCriteria\FindByCriteriaResponse;
use Tests\Challenge\Account\Domain\AccountMother;

class FindByCriteriaResponseMother
{
    public static function create(string $id, string $userId, ?string $address, ?float $balance, string $locked)
    {
        return new FindByCriteriaResponse($id, $userId, $address, $balance, $locked);
    }

    public static function random()
    {
        $account = AccountMother::random();

        return self::create(
            $account->id()->value(),
            $account->userId()->value(),
            $account->address()->value(),
            $account->balance()->value(),
            $account->locked()->value()
        );
    }
}