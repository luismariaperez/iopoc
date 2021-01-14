<?php

declare(strict_types=1);

namespace Challenge\Account\Application\Find;

use Challenge\Account\Domain\Account;
use Challenge\Account\Domain\Finder;
use Challenge\Account\Domain\Id;
use Shared\Domain\Bus\Query\QueryHandler;

class FindQueryHandler implements QueryHandler
{
    private Finder $finder;

    public function __construct(Finder $finder)
    {
        $this->finder = $finder;
    }

    public function __invoke(FindQuery $query)
    {
        $account = $this->finder->__invoke(Id::create($query->getAccountId()));

        return $this->createResponse($account);
    }

    public function createResponse(Account $account): FindResponse
    {
        return new FindResponse(
            $account->id()->value(),
            $account->userId()->value(),
            $account->address()->value(),
            $account->balance()->value(),
            $account->locked()->value()
        );
    }
}