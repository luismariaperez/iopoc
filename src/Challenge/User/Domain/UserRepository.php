<?php

declare(strict_types=1);

namespace Challenge\User\Domain;

interface UserRepository
{
    public function save(User $user);
}