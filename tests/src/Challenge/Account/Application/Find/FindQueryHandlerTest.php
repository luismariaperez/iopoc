<?php

declare(strict_types=1);

namespace Tests\Challenge\Account\Application\Find;

use Challenge\Account\Application\Find\FindQueryHandler;
use Challenge\Account\Domain\AccountNotFound;
use Challenge\Account\Domain\Finder;
use Tests\Challenge\Account\AccountContextUnitTestCase;
use Tests\Challenge\Account\Domain\AccountMother;

class FindQueryHandlerTest extends AccountContextUnitTestCase
{
    private FindQueryHandler $handler;

    protected function setUp()
    {
        parent::setUp();

        $this->handler = new FindQueryHandler(new Finder($this->repository()));
    }

    /** @test */
    public function itShouldFindAccount(): void
    {
        $account = AccountMother::random();
        $query = FindQueryMother::create(
            $account->id()->value()
        );
        $response = FindResponseMother::create(
            $account->id()->value(),
            $account->userId()->value(),
            $account->address()->value(),
            $account->balance()->value(),
            $account->locked()->value()
        );

        $this->shouldSearch($account->id(), $account);
        $this->shouldNotPublishDomainEvents();

        $actual = $this->handler->__invoke($query);

        $this->assertEquals($response, $actual);
    }

    /** @test */
    public function itShouldNotFindAccount(): void
    {
        $query = FindQueryMother::random();

        $this->shouldNotPublishDomainEvents();
        $this->expectException(AccountNotFound::class);

        $this->handler->__invoke($query);
    }
}