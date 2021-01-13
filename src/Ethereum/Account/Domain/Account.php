<?php

declare(strict_types=1);

namespace Ethereum\Account\Domain;

use Shared\Domain\Aggregate\AggregateRoot;

/**
 * Mock class for the exercise
 */
class Account extends AggregateRoot
{
    // Ethereum ERC20 Smart Contract representation

    public static function generateMockAccount(Id $id): Account
    {
        $account = new self();
        $account->record(
            AccountCreatedEvent::fromPrimitives(
                $id->value(),
                [
                    'address' => uniqid(),
                    'balance' => 100.00,
                ]
            )
        );

        return $account;
    }
}