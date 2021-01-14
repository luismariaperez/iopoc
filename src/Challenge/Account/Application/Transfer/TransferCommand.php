<?php

declare(strict_types=1);

namespace Challenge\Account\Application\Transfer;

use Shared\Domain\Bus\Command\Command;

class TransferCommand implements Command
{
    private string $accountId;
    private string $address;
    private float $eth;

    public function __construct(string $accountId, string $address, float $eth)
    {
        $this->accountId = $accountId;
        $this->address = $address;
        $this->eth = $eth;
    }

    public function getAccountId(): string
    {
        return $this->accountId;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getEth(): float
    {
        return $this->eth;
    }

}