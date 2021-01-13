<?php

declare(strict_types=1);

namespace Tests\Challenge\Account\Domain;

use Challenge\Account\Domain\Address;

class AddressMother
{
    public static function create(string $address): Address
    {
        return Address::create($address);
    }

    public static function random(): Address
    {
        return self::create(uniqid());
    }
}