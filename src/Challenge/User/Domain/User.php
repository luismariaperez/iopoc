<?php

declare(strict_types=1);

namespace Challenge\User\Domain;

use Challenge\Shared\Domain\User\Id;
use Shared\Domain\Aggregate\AggregateRoot;

class User extends AggregateRoot
{
    private Id $id;
    private Email $email;

    private function __construct(Id $id, Email $email)
    {
        $this->id = $id;
        $this->email = $email;
    }

    public static function create(Id $id, Email $email): User
    {
        $user = new self($id, $email);

        $user->record(UserCreatedEvent::fromPrimitives(
            $id->value(),
            [
                'email' => $email->value(),
            ]
        ));

        return $user;
    }

    public function id(): Id
    {
        return $this->id;
    }

    public function email(): Email
    {
        return $this->email;
    }
}