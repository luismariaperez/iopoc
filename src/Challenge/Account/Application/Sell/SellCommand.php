<?php

declare(strict_types=1);

namespace Challenge\Account\Application\Sell;

use Shared\Domain\Bus\Command\Command;

class SellCommand implements Command
{
    private string $accountId;
    private float $eth;

    public function __construct(string $accountId, float $eth)
    {
        $this->accountId = $accountId;
        $this->eth = $eth;
    }

    public function getAccountId(): string
    {
        return $this->accountId;
    }

    public function getEth(): float
    {
        return $this->eth;
    }
}