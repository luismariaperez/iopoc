<?php

declare(strict_types=1);

namespace Tests\Challenge\User\Application\Create;

use Challenge\User\Application\Create\CreateUserHandler;
use Challenge\User\Application\Create\Creator;
use Tests\Challenge\User\Domain\UserCreatedEventMother;
use Tests\Challenge\User\Domain\UserMother;
use Tests\Challenge\User\UserContextUnitTestCase;

class CreateUserHandlerTest extends UserContextUnitTestCase
{
    private CreateUserHandler $handler;

    protected function setUp()
    {
        parent::setUp();

        $creator = new Creator($this->repository(), $this->eventBus());
        $this->handler = new CreateUserHandler($creator);
    }

    /**
     * @test
     */
    public function itShouldCreateUser()
    {
        $user = UserMother::random();
        $command = CreateUserCommandMother::create(
            $user->id()->value(),
            $user->email()->value()
        );
        $event = UserCreatedEventMother::create(
            $user->id()->value(),
            $user->email()->value()
        );

        $this->shouldSave($user);
        $this->shouldPublishDomainEvent($event);

        $this->handler->__invoke($command);
    }
}