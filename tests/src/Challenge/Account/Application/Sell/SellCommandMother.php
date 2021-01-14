<?php

declare(strict_types=1);

namespace Tests\Challenge\Account\Application\Sell;

use Challenge\Account\Application\Sell\SellCommand;
use Tests\Challenge\Account\Domain\EthMother;
use Tests\Challenge\Account\Domain\IdMother;

class SellCommandMother
{
    public static function create(string $id, float $eth): SellCommand
    {
        return new SellCommand($id, $eth);
    }

    public static function random(): SellCommand
    {
        return self::create(
            IdMother::random()->value(),
            EthMother::random()->value()
        );
    }
}