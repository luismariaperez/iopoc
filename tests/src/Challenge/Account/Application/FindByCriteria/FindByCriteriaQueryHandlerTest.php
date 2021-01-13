<?php

declare(strict_types=1);

namespace Tests\Challenge\Account\Application\FindByCriteria;

use Challenge\Account\Application\FindByCriteria\FindByCriteriaQueryHandler;
use Challenge\Account\Application\FindByCriteria\Finder;
use Challenge\Account\Domain\AccountNotFoundByCriteria;
use Tests\Challenge\Account\AccountContextUnitTestCase;
use Tests\Challenge\Account\Domain\AccountMother;

class FindByCriteriaQueryHandlerTest extends AccountContextUnitTestCase
{
    private FindByCriteriaQueryHandler $handler;

    protected function setUp()
    {
        parent::setUp();

        $this->handler = new FindByCriteriaQueryHandler(
            new Finder($this->repository())
        );
    }

    /** @test */
    public function itShouldFindAnAccountByUser()
    {
        $query = FindByCriteriaQueryMother::random();
        $account = AccountMother::random();
        $response = FindByCriteriaResponseMother::create(
            $account->id()->value(),
            $account->userId()->value(),
            $account->address()->value(),
            $account->balance()->value(),
            $account->locked()->value()
        );

        $this->shouldSearchByCriteria($query->getCriteria(), $account);

        $actual = $this->handler->__invoke($query);

        $this->assertEquals($response, $actual);
    }

    /** @test */
    public function itShouldNotFindAnAccount()
    {
        $query = FindByCriteriaQueryMother::random();

        $this->shouldSearchByCriteria($query->getCriteria(), null);

        $this->expectException(AccountNotFoundByCriteria::class);

        $this->handler->__invoke($query);
    }
}