<?php

declare(strict_types=1);

namespace Tests\Challenge\Account\Application\Transfer;

use Challenge\Account\Application\Transfer\Transferer;
use Challenge\Account\Application\Transfer\TransferHandler;
use Challenge\Account\Domain\Finder;
use Challenge\Account\Domain\NotEnoughBalance;
use Tests\Challenge\Account\AccountContextUnitTestCase;
use Tests\Challenge\Account\Domain\AccountMother;
use Tests\Challenge\Account\Domain\AccountTransferCreatedEventMother;
use Tests\Challenge\Account\Domain\BalanceMother;
use Tests\Challenge\Account\Domain\EthMother;
use Tests\Challenge\Account\Domain\ReceiverMother;

class TransferHandlerTest extends AccountContextUnitTestCase
{
    private TransferHandler $handler;

    protected function setUp()
    {
        parent::setUp();

        $this->handler = new TransferHandler(
            new Transferer( new Finder($this->repository()), $this->eventBus())
        );
    }

    /** @test */
    public function itShouldCreateTransfer()
    {
        $account = AccountMother::random();
        $account->updateBalance(
            BalanceMother::create(100.00)
        );
        $account->pullDomainEvents();
        $eth = EthMother::create(40.00);
        $receiver = ReceiverMother::random();

        $command = TransferCommandMother::create(
            $account->id()->value(),
            $receiver->value(),
            $eth->value()
        );

        $event = AccountTransferCreatedEventMother::create(
            $account->id()->value(),
            $account->userId()->value(),
            $account->address()->value(),
            $account->balance()->value(),
            $account->locked()->value(),
            $eth->value(),
            $receiver->value()
        );

        $this->shouldPublishDomainEvent($event);
        $this->shouldSearch($account->id(), $account);

        $this->handler->__invoke($command);
    }

    /** @test */
    public function itShouldNotCreateTransferDueLackOfBalance()
    {
        $account = AccountMother::random();
        $account->updateBalance(
            BalanceMother::create(100.00)
        );
        $account->pullDomainEvents();
        $eth = EthMother::create(140.00);
        $receiver = ReceiverMother::random();

        $command = TransferCommandMother::create(
            $account->id()->value(),
            $receiver->value(),
            $eth->value()
        );

        $this->shouldNotPublishDomainEvents();
        $this->shouldSearch($account->id(), $account);
        $this->expectException(NotEnoughBalance::class);

        $this->handler->__invoke($command);
    }
}