<?php

declare(strict_types=1);

namespace Ethereum\Account\Infrastructure\Persistence;

use Ethereum\Account\Domain\Account;
use Ethereum\Account\Domain\Address;
use Ethereum\Account\Domain\ECR20Repository;
use FurqanSiddiqui\Ethereum\Ethereum as EthereumNode;

class Ethereum implements ECR20Repository
{
    private EthereumNode $ethereum;

    public function __construct(EthereumNode $ethereum)
    {
        $this->ethereum = $ethereum;
    }

    public function save(Account $token): void
    {
        // $erc20 = new ERC20($this->ethereum)
        // ...

    }

    public function search(Address $address): Account
    {
        // $erc20 = new ERC20($this->ethereum)
        // $token = $erc20->token($address->value())
        // ...
    }
}