<?php

declare(strict_types=1);

namespace Challenge\Account\Application\Find;

use Shared\Domain\Bus\Query\Query;

class FindQuery implements Query
{
    private string $accountId;

    public function __construct(string $id)
    {
        $this->accountId = $id;
    }

    public function getAccountId(): string
    {
        return $this->accountId;
    }
}