<?php

declare(strict_types=1);

namespace Shared\Domain\Criteria;

abstract class Criteria
{
    abstract public function field(): string;

    abstract public function value();
}