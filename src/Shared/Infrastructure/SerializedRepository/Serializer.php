<?php

declare(strict_types=1);

namespace Shared\Infrastructure\SerializedRepository;

/**
 * Class Serializer
 * @package Shared\Infrastructure\SerializedRepository
 */
class Serializer
{
    const BASE_PATH = "/app/persistence";

    /**
     * @var string
     */
    private $file;

    /**
     * @var array
     */
    private $data;

    /**
     * Serializer constructor.
     * @param string $file
     */
    public function __construct(string $file)
    {
        $this->file = sprintf("%s/%s", self::BASE_PATH, $file);

        if (!file_exists($this->file)) {
            $this->truncate();
        }

        $this->data = unserialize(file_get_contents($this->file));
    }

    public function saveEntity($id, $data): void
    {
        $this->data[$id] = $data;
    }

    public function remove($id): void
    {
        $this->checkKey($id);
        unset($this->data[$id]);
    }

    public function find($id)
    {
        try {
            $this->checkKey($id);
            return $this->data[$id];
        } catch (\LogicException $e) {
            return null;
        }
    }

    public function findAll()
    {
        return $this->data;
    }

    public function commit(): void
    {
        file_put_contents($this->file, serialize($this->data));
    }

    public function truncate(): void
    {
        $this->data = [];
        file_put_contents($this->file, serialize($this->data));
    }

    public function destroy(): void
    {
        unlink($this->file);
    }

    private function checkKey($id): void
    {
        if (!array_key_exists($id, $this->data)) {
            throw new \LogicException("$id does not exists in {$this->file}");
        }
    }

    public function getBasePath(): string
    {
        return self::BASE_PATH;
    }
}