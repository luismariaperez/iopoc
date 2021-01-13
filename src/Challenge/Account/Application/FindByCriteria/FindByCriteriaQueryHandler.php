<?php

declare(strict_types=1);

namespace Challenge\Account\Application\FindByCriteria;

use Challenge\Account\Domain\Account;
use Shared\Domain\Bus\Query\QueryHandler;

class FindByCriteriaQueryHandler implements QueryHandler
{
    private Finder $finder;

    public function __construct(Finder $finder)
    {
        $this->finder = $finder;
    }

    public function __invoke(FindByCriteriaQuery $query)
    {
        $account = $this->finder->__invoke($query->getCriteria());

        return $this->createResponse($account);
    }

    private function createResponse(Account $account): FindByCriteriaResponse
    {
        return new FindByCriteriaResponse(
            $account->id()->value(),
            $account->userId()->value(),
            $account->address()->value(),
            $account->balance()->value(),
            $account->locked()->value()
        );
    }
}