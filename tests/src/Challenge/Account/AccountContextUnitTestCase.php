<?php

namespace Tests\Challenge\Account;

use Challenge\Account\Domain\Account;
use Challenge\Account\Domain\AccountRepository;
use Challenge\Account\Domain\Id;
use PHPUnit\Framework\MockObject\MockObject;
use Tests\Challenge\Shared\Domain\ChallengeContextUnitTestCase;

class AccountContextUnitTestCase extends ChallengeContextUnitTestCase
{
    private $repository;

    /**
     * @return AccountRepository|MockObject
     */
    protected function repository()
    {
        return $this->repository = $this->repository ?: $this->mock(AccountRepository::class);
    }

    protected function shouldSave(Account $account)
    {
        $this->repository()
            ->expects($this->once())
            ->method('save')
            ->with($this->callback(function (Account $actual) use ($account){
                $this->assertEquals($actual->id(), $account->id());
                $this->assertEquals($actual->userId(), $account->userId());
                $this->assertEquals($actual->address(), $account->address());
                $this->assertEquals($actual->balance(), $account->balance());
                $this->assertEquals($actual->locked(), $account->locked());

                return !$this->hasFailed();
            }))
            ->willReturn(null);
    }

    protected function shouldSearch(Id $id, Account $account): Account
    {
        $this->repository()
            ->expects($this->once())
            ->method('search')
            ->with($id)
            ->willReturn($account);
    }
}