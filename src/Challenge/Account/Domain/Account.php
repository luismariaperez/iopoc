<?php

declare(strict_types=1);

namespace Challenge\Account\Domain;

use mysql_xdevapi\Exception;
use Shared\Domain\Aggregate\AggregateRoot;
use Challenge\Shared\Domain\User\Id as UserId;

class Account extends AggregateRoot
{
    private Id $id;
    private UserId $userId;
    private ?Address $address;
    private ?Balance $balance;
    private Locked $locked;

    public function __construct(Id $id, UserId $userId, ?Address $address, ?Balance $balance, Locked $locked)
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->address = $address;
        $this->balance = $balance;
        $this->locked = $locked;
    }

    public static function createEmpty(Id $id, UserId $userId): Account
    {
        $token = new self($id, $userId, null, null,  Locked::creation());

        $token->record(
            AccountCreatedEvent::fromPrimitives(
                $id->value(),
                [
                    'userId' => $userId->value(),
                    'locked' => $token->locked->value(),
                ]
            )
        );

        return $token;
    }

    public function complete(Address $address, Balance $balance): void
    {
        $this->address = $address;
        $this->balance = $balance;
        $this->locked = Locked::unlocked();

        $this->record(
            AccountCompletedEvent::fromPrimitives(
                $this->id->value(),
                [
                    'userId' => $this->userId->value(),
                    'address' => $this->address->value(),
                    'balance' => $this->balance->value(),
                    'locked' => $this->locked->value(),
                ]
            )
        );
    }

    public function buy(Fiat $fiat): void
    {
        $this->checkLocked();

        $this->locked = Locked::buy();

        $this->record(
            AccountBuyCreatedEvent::fromPrimitives(
                $this->id->value(),
                [
                    'userId' => $this->userId->value(),
                    'address' => $this->address->value(),
                    'balance' => $this->balance->value(),
                    'locked' => $this->locked->value(),
                    'fiat' => $fiat->value(),
                ]
            )
        );
    }

    public function sell(Eth $eth): void
    {
        $this->checkLocked();
        $this->checkEnoughBalance($eth);

        $this->locked = Locked::withdraw();

        $this->record(
            AccountSellCreatedEvent::fromPrimitives(
                $this->id->value(),
                [
                    'userId' => $this->userId->value(),
                    'address' => $this->address->value(),
                    'balance' => $this->balance->value(),
                    'locked' => $this->locked->value(),
                    'eth' => $eth->value(),
                ]
            )
        );
    }

    public function transfer(Receiver $address, Eth $eth): void
    {
        $this->checkLocked();
        $this->checkEnoughBalance($eth);

        $this->locked = Locked::transfer();

        $this->record(
            AccountSellCreatedEvent::fromPrimitives(
                $this->id->value(),
                [
                    'userId' => $this->userId->value(),
                    'address' => $this->address->value(),
                    'balance' => $this->balance->value(),
                    'locked' => $this->locked->value(),
                    'eth' => $eth->value(),
                ]
            )
        );
    }

    public function updateBalance(Balance $balance): void
    {
        $this->balance = $balance;
        $this->locked = Locked::unlocked();

        $this->record(
            AccountBalanceUpdatedEvent::fromPrimitives(
                $this->id->value(),
                [
                    'userId' => $this->userId->value(),
                    'address' => $this->address->value(),
                    'balance' => $this->balance->value(),
                    'locked' => $this->locked->value(),
                ]
            )
        );
    }

    public function id(): Id
    {
        return $this->id;
    }

    public function userId(): UserId
    {
        return $this->userId;
    }

    public function address(): ?Address
    {
        return $this->address;
    }

    public function balance(): ?Balance
    {
        return $this->balance;
    }

    public function locked(): Locked
    {
        return $this->locked;
    }

    public function isLocked(): bool
    {
        return Locked::UNLOCKED !== $this->locked;
    }

    private function checkLocked(): void
    {
        if(!$this->isLocked())
        {
            throw new AccountLocked($this->id->value(), $this->locked->value());
        }
    }

    private function checkEnoughBalance(Eth $eth): void
    {
        if(!$this->balance->enough($eth))
        {
            throw new NotEnoughBalance($this->id->value());
        }
    }
}