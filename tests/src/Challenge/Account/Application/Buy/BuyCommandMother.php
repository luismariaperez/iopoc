<?php

declare(strict_types=1);

namespace Tests\Challenge\Account\Application\Buy;

use Challenge\Account\Application\Buy\BuyCommand;
use Tests\Challenge\Account\Domain\FiatMother;
use Tests\Challenge\Account\Domain\IdMother;

class BuyCommandMother
{
    public static function create(string $accountId, float $fiat): BuyCommand
    {
        return new BuyCommand($accountId, $fiat);
    }

    public static function random(): BuyCommand
    {
        return self::create(
            IdMother::random()->value(),
            FiatMother::random()->value()
        );
    }
}