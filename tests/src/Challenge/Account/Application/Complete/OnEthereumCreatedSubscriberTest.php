<?php

declare(strict_types=1);

namespace Tests\Challenge\Account\Application\Complete;

use Challenge\Account\Application\Complete\Completer;
use Challenge\Account\Application\Complete\OnEthereumCreatedSubscriber;
use Challenge\Account\Domain\Finder;
use Ethereum\Account\Domain\AccountCreatedEvent;
use Tests\Challenge\Account\AccountContextUnitTestCase;
use Tests\Challenge\Account\Domain\AccountCompletedEventMother;
use Tests\Challenge\Account\Domain\AccountMother;
use Tests\Challenge\Account\Domain\AddressMother;
use Tests\Challenge\Account\Domain\BalanceMother;
use Tests\Ethereum\Account\Domain\AccountCreatedEventMother;

class OnEthereumCreatedSubscriberTest extends AccountContextUnitTestCase
{
    private OnEthereumCreatedSubscriber $subscriber;

    protected function setUp()
    {
        parent::setUp();

        $this->subscriber = new OnEthereumCreatedSubscriber(
            new Completer(
                $this->repository(),
                new Finder($this->repository()),
                $this->eventBus()
            )
        );
    }

    /** @test */
    public function itShouldCompleteAccountInfo(): void
    {
        $account = AccountMother::createEmptyRandom();
        $address = AddressMother::random();
        $balance = BalanceMother::random();

        $event = AccountCreatedEventMother::create(
            $account->id()->value(),
            $address->value(),
            $balance->value()
        );

        $expected = clone $account;
        $expected->complete($address, $balance);
        $completed = AccountCompletedEventMother::create(
            $expected->id()->value(),
            $expected->userId()->value(),
            $expected->address()->value(),
            $expected->balance()->value(),
            $expected->locked()->value()
        );

        $this->shouldSearch($account->id(), $account);
        $this->shouldSave($expected);
        $this->shouldPublishDomainEvent($completed);

        /** @var AccountCreatedEvent $event */
        $this->subscriber->__invoke($event);
    }
}