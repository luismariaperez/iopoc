<?php

declare(strict_types=1);

namespace Challenge\Shared\Domain\Account;

use Shared\Domain\Criteria\Criteria;

class FindByUserCriteria extends Criteria
{
    public const FIELD = "userId";
    public string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function field(): string
    {
        return self::FIELD;
    }

    public function value()
    {
        return $this->value;
    }
}