<?php

declare(strict_types=1);

namespace Tests\Challenge\Account\Application\Find;

use Challenge\Account\Application\Find\FindResponse;
use Tests\Challenge\Account\Domain\AccountMother;

class FindResponseMother
{
    public static function create(
        string $id,
        string $userId,
        ?string $address,
        ?float $balance,
        string $locked
    ): FindResponse {
        return new FindResponse($id, $userId, $address, $balance, $locked);
    }

    public static function random(): FindResponse
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