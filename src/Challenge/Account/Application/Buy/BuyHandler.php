<?php

declare(strict_types=1);

namespace Challenge\Account\Application\Buy;

use Challenge\Account\Domain\Fiat;
use Challenge\Account\Domain\Id;
use Shared\Domain\Bus\Command\CommandHandler;

class BuyHandler implements CommandHandler
{
    private Buyer $buyer;

    public function __construct(Buyer $buyer)
    {
        $this->buyer = $buyer;
    }

    public function __invoke(BuyCommand $command): void
    {
        $this->buyer->__invoke(
            Id::create($command->getAccountId()),
            Fiat::create($command->getFiat())
        );
    }
}