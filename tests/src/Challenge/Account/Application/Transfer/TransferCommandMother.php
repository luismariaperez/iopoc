<?php

declare(strict_types=1);

namespace Tests\Challenge\Account\Application\Transfer;

use Challenge\Account\Application\Transfer\TransferCommand;
use Tests\Challenge\Account\Domain\AddressMother;
use Tests\Challenge\Account\Domain\EthMother;
use Tests\Challenge\Account\Domain\IdMother;

class TransferCommandMother
{
    public static function create(string $id, string $address, float $eth): TransferCommand
    {
        return new TransferCommand($id, $address, $eth);
    }

    public static function random(): TransferCommand
    {
        return self::create(
            IdMother::random()->value(),
            AddressMother::random()->value(),
            EthMother::random()->value()
        );
    }
}