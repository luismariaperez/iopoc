<?php

declare(strict_types=1);

namespace Tests\Challenge\Account\Application\UpdateBalance;

use Challenge\Account\Application\UpdateBalance\OnBalanceUpdatedSubscriber;
use Challenge\Account\Application\UpdateBalance\Updater;
use Challenge\Account\Domain\Finder;
use Tests\Challenge\Account\AccountContextUnitTestCase;
use Tests\Challenge\Account\Domain\AccountBalanceUpdatedEventMother;
use Tests\Challenge\Account\Domain\AccountMother;
use Tests\Challenge\Account\Domain\BalanceMother;
use Tests\Ethereum\Account\Domain\AccountBalanceUpdatedEventMother as EthereumAccountBalanceEvent;

class OnUpdateBalanceSubscriberTest extends AccountContextUnitTestCase
{
    private OnBalanceUpdatedSubscriber $subscriber;

    protected function setUp()
    {
        parent::setUp();

        $this->subscriber = new OnBalanceUpdatedSubscriber(
            new Updater($this->repository(), new Finder($this->repository()), $this->eventBus())
        );
    }

    /** @test */
    public function itShouldUpdateBalance(): void
    {
        $account = AccountMother::random();
        $account->pullDomainEvents();
        $balance = BalanceMother::random();

        $trigger = EthereumAccountBalanceEvent::create(
            $account->id()->value(),
            $account->address()->value(),
            $balance->value()
        );

        $expected = clone $account;
        $expected->updateBalance($balance);

        $event = AccountBalanceUpdatedEventMother::create(
            $expected->id()->value(),
            $expected->userId()->value(),
            $expected->address()->value(),
            $expected->balance()->value(),
            $expected->locked()->value()
        );

        $this->shouldSearch($account->id(), $account);
        $this->shouldSave($expected);
        $this->shouldPublishDomainEvent($event);

        $this->subscriber->__invoke($trigger);
    }
}