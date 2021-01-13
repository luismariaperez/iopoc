<?php

declare(strict_types=1);

namespace Tests\Challenge\Account\Application\Create;

use Challenge\Account\Application\Create\Creator;
use Tests\Challenge\Account\AccountContextUnitTestCase;
use Tests\Challenge\Account\Domain\AccountCreatedEventMother;
use Tests\Challenge\Account\Domain\AccountMother;

class CreatorTest extends AccountContextUnitTestCase
{
    private Creator $creator;

    protected function setUp()
    {
        parent::setUp();

        $this->creator = new Creator($this->repository(), $this->eventBus());
    }

    /** @test */
    public function itShouldCreateAccount()
    {
        $account = AccountMother::createEmptyRandom();
        $event = AccountCreatedEventMother::create(
            $account->id()->value(),
            $account->userId()->value(),
            $account->locked()->value()
        );

        $this->shouldSave($account);
        $this->shouldPublishDomainEvent($event);
        $this->creator->__invoke($account->id(), $account->userId());
    }
}