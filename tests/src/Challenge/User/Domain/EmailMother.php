<?php

declare(strict_types=1);

namespace Tests\Challenge\User\Domain;

use Challenge\User\Domain\Email;
use Faker\Factory;

class EmailMother
{
    static public function create(string $value): Email
    {
        return Email::create($value);
    }

    static public function random(): Email
    {
        return self::create(Factory::create()->email());
    }
}