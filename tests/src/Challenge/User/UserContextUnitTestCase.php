<?php

declare(strict_types=1);

namespace Tests\Challenge\User;

use Challenge\User\Domain\User;
use Challenge\User\Domain\UserRepository;
use PHPUnit\Framework\MockObject\MockObject;
use Tests\Challenge\Shared\Domain\ChallengeContextUnitTestCase;

class UserContextUnitTestCase extends ChallengeContextUnitTestCase
{
    private $repository;

    /**
     * @return UserRepository|MockObject
     */
    protected function repository()
    {
        return $this->repository = $this->repository ?: $this->mock(UserRepository::class);
    }

    protected function shouldSave(User $expected): void
    {
        $this->repository()
            ->expects($this->once())
            ->method('save')
            ->with($this->callback(function (User $user) use ($expected) {
                $this->assertEquals($user->email(), $expected->email());
                return !$this->hasFailed();
            }))
            ->willReturn(null);
    }
}