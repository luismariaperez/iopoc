<?php

declare(strict_types=1);

namespace Challenge\Account\Application\Buy;

use Shared\Domain\Bus\Command\Command;

class BuyCommand implements Command
{
    private string $accountId;
    private float $fiat;

    public function __construct(string $accountId, float $fiat)
    {
        $this->accountId = $accountId;
        $this->fiat = $fiat;
    }

    public function getAccountId(): string
    {
        return $this->accountId;
    }

    public function getFiat(): float
    {
        return $this->fiat;
    }
}