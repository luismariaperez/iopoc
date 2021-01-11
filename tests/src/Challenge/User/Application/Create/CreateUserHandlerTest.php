<?php

declare(strict_types=1);

namespace Tests\Challenge\User\Application\Create;

use Challenge\User\Application\Create\Creator;
use Tests\Challenge\User\UserContextUnitTest;

class CreateUserHandlerTest extends UserContextUnitTest
{
    protected function setUp()
    {
        parent::setUp();

        $creator = new Creator($this->repository(), $this->eventBus());
    }

    /**
     * @test
     */
    public function itShouldCreateUser()
    {

    }
}