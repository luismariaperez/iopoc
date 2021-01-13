<?php

declare(strict_types=1);

namespace Challenge\Account\Domain;

use Shared\Domain\ValueObject\Enum;
use InvalidArgumentException;

/**
 * @method static Locked creation()
 * @method static Locked add()
 * @method static Locked withdraw()
 * @method static Locked transfer()
 * @method static Locked unlocked()
 */
class Locked extends Enum
{
    public const CREATION = 'creation';
    public const BUY = 'buy';
    public const WITHDRAW = 'withdraw';
    public const TRANSFER = 'transfer';
    public const UNLOKED = 'unlocked';

    protected function throwExceptionForInvalidValue($value): void
    {
        throw new InvalidArgumentException($value);
    }
}