<?php

declare(strict_types=1);

namespace Tests\Challenge\Account\Application\Sell;

use Challenge\Account\Application\Sell\Seller;
use Challenge\Account\Application\Sell\SellHandler;
use Challenge\Account\Domain\Finder;
use Challenge\Account\Domain\NotEnoughBalance;
use Tests\Challenge\Account\AccountContextUnitTestCase;
use Tests\Challenge\Account\Domain\AccountMother;
use Tests\Challenge\Account\Domain\AccountSellCreatedEventMother;
use Tests\Challenge\Account\Domain\BalanceMother;
use Tests\Challenge\Account\Domain\EthMother;

class SellHandlerTest extends AccountContextUnitTestCase
{
    private SellHandler $handler;

    protected function setUp()
    {
        parent::setUp();

        $this->handler = new SellHandler(
            new Seller(new Finder($this->repository()), $this->eventBus())
        );
    }

    /** @test */
    public function itShouldCreateASell(): void
    {
        $account = AccountMother::random();
        $account->updateBalance(
            BalanceMother::create(100.00)
        );
        $account->pullDomainEvents();
        $eth = EthMother::create(40.00);

        $command = SellCommandMother::create(
            $account->id()->value(),
            $eth->value()
        );

        $event = AccountSellCreatedEventMother::create(
            $account->id()->value(),
            $account->userId()->value(),
            $account->address()->value(),
            $account->balance()->value(),
            $account->locked()->value(),
            $eth->value()
        );

        $this->shouldSearch($account->id(), $account);
        $this->shouldPublishDomainEvent($event);

        $this->handler->__invoke($command);
    }

    /** @test */
    public function itShouldNotCreateASellDueLackOfBalance()
    {
        $account = AccountMother::random();
        $account->updateBalance(BalanceMother::create(100.00));
        $account->pullDomainEvents();

        $command = SellCommandMother::create(
            $account->id()->value(),
            EthMother::create(200.00)->value()
        );

        $this->shouldSearch($account->id(), $account);
        $this->shouldNotPublishDomainEvents();
        $this->expectException(NotEnoughBalance::class);

        $this->handler->__invoke($command);
    }
}