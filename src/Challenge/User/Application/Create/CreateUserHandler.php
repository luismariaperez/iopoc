<?php

declare(strict_types=1);

namespace Challenge\User\Application\Create;

use Challenge\Shared\Domain\User\Id;
use Challenge\User\Domain\Email;
use Shared\Domain\Bus\Command\CommandHandler;

class CreateUserHandler implements CommandHandler
{
     private Creator $create;

     public function __construct(Creator $create)
     {
         $this->create = $create;
     }

     public function handle(CreateUserCommand $command)
     {
        $this->create->__invoke(
            new Id($command->getId()),
            Email::create($command->getEmail())
        );
     }
}