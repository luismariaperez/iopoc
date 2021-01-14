<?php

declare(strict_types=1);

namespace Challenge\Account\Application\Sell;

use Challenge\Account\Domain\Eth;
use Challenge\Account\Domain\Id;
use Shared\Domain\Bus\Command\CommandHandler;

class SellHandler implements CommandHandler
{
    private Seller $seller;

    public function __construct(Seller $seller)
    {
        $this->seller = $seller;
    }

    public function __invoke(SellCommand $command)
    {
        $this->seller->__invoke(
            Id::create($command->getAccountId()),
            Eth::create($command->getEth())
        );
    }
}