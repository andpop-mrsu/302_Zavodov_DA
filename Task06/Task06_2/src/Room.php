<?php

namespace Zavodov\Task06_2;

abstract class Room implements RoomInterface
{
    protected $price;
    protected $description;

    protected function __construct(int $price, string $description)
    {
        $this->price = $price;
        $this->description = $description;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getDescription(): string
    {
        return "Номер: " . $this->description;
    }
}
