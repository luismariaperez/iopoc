<?php

declare(strict_types=1);

namespace Challenge\Account\Application\Transfer;

use Challenge\Account\Domain\Eth;
use Challenge\Account\Domain\Id;
use Challenge\Account\Domain\Receiver;
use Shared\Domain\Bus\Command\CommandHandler;

class TransferHandler implements CommandHandler
{
    private Transferer $transferer;

    public function __construct(Transferer $transferer)
    {
        $this->transferer = $transferer;
    }

    public function __invoke(TransferCommand $command): void
    {
        $this->transferer->__invoke(
            Id::create($command->getAccountId()),
            Receiver::create($command->getAddress()),
            Eth::create($command->getEth())
        );
    }
}