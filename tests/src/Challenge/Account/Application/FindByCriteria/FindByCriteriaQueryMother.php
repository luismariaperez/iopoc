<?php

declare(strict_types=1);

namespace Tests\Challenge\Account\Application\FindByCriteria;

use Challenge\Account\Application\FindByCriteria\FindByCriteriaQuery;
use Shared\Domain\Criteria\Criteria;
use Tests\Challenge\Shared\Domain\Account\FindByUserCriteriaMother;

class FindByCriteriaQueryMother
{
    public static function create(Criteria $criteria): FindByCriteriaQuery
    {
        return new FindByCriteriaQuery($criteria);
    }

    public static function random(): FindByCriteriaQuery
    {
        return self::create(FindByUserCriteriaMother::random());
    }
}