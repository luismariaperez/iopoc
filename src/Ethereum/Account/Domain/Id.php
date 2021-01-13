<?php

declare(strict_types=1);

namespace Ethereum\Account\Domain;

use Shared\Domain\ValueObject\Uuid;

class Id extends Uuid
{
    public static function create(string $uuid): Id
    {
        return new self($uuid);
    }
}