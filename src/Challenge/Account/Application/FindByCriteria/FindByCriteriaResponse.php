<?php

declare(strict_types=1);

namespace Challenge\Account\Application\FindByCriteria;

use Shared\Domain\Bus\Query\Response;

class FindByCriteriaResponse implements Response
{
    private string $id;
    private string $userId;
    private ?string $address;
    private ?float $balance;
    private string $locked;

    public function __construct(string $id, string $userId, ?string $address, ?float $balance, string $locked)
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->address = $address;
        $this->balance = $balance;
        $this->locked = $locked;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function getBalance(): ?float
    {
        return $this->balance;
    }

    public function getLocked(): string
    {
        return $this->locked;
    }
}