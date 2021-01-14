<?php

declare(strict_types=1);

namespace Tests\Challenge\Account\Domain;

use Challenge\Account\Domain\Receiver;

class ReceiverMother
{
    public static function create(string $address): Receiver
    {
        return Receiver::create($address);
    }

    public static function random(): Receiver
    {
        return self::create(uniqid());
    }
}