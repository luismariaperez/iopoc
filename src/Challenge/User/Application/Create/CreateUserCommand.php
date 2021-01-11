<?php

declare(strict_types=1);

namespace Challenge\User\Application\Create;

use Shared\Domain\Bus\Command\Command;

class CreateUserCommand implements Command
{
    private string $id;
    private string $email;

    public function __construct(string $id, string $email)
    {
        $this->id = $id;
        $this->email = $email;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }


}