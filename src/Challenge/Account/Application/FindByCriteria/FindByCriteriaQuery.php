<?php

declare(strict_types=1);

namespace Challenge\Account\Application\FindByCriteria;

use Shared\Domain\Bus\Query\Query;
use Shared\Domain\Criteria\Criteria;

class FindByCriteriaQuery implements Query
{
    private Criteria $criteria;

    public function __construct(Criteria $criteria)
    {
        $this->criteria = $criteria;
    }

    public function getCriteria(): Criteria
    {
        return $this->criteria;
    }
}