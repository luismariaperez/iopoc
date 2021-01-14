<?php

declare(strict_types=1);

namespace Tests\Challenge\Account\Application\Buy;

use Challenge\Account\Application\Buy\Buyer;
use Challenge\Account\Application\Buy\BuyHandler;
use Challenge\Account\Domain\Finder;
use Tests\Challenge\Account\AccountContextUnitTestCase;
use Tests\Challenge\Account\Domain\AccountBuyCreatedEventMother;
use Tests\Challenge\Account\Domain\AccountMother;
use Tests\Challenge\Account\Domain\FiatMother;

class BuyCommandHandlerTest extends AccountContextUnitTestCase
{
    private BuyHandler $handler;

    protected function setUp()
    {
        parent::setUp();

        $this->handler = new BuyHandler(
            new Buyer(new Finder($this->repository()), $this->eventBus())
        );
    }

    /** @test */
    public function itShouldCreateABuy(): void
    {
        $account = AccountMother::random();
        $account->pullDomainEvents();
        $fiat = FiatMother::random();
        $command = BuyCommandMother::create(
            $account->id()->value(),
            $fiat->value()
        );

        $event = AccountBuyCreatedEventMother::create(
            $account->id()->value(),
            $account->userId()->value(),
            $account->address()->value(),
            $account->balance()->value(),
            $account->locked()->value(),
            $fiat->value()
        );

        $this->shouldSearch($account->id(), $account);
        $this->shouldPublishDomainEvent($event);

        $this->handler->__invoke($command);
    }
}