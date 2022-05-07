<?php

namespace Zavodov\Task06_2;

abstract class Decorator implements RoomInterface
{
    private $room;

    public function __construct(RoomInterface $room)
    {
        $this->room = $room;
    }

    public function getPrice(): int
    {
        return $this->room->getPrice();
    }

    public function getDescription(): string
    {
        return $this->room->getDescription();
    }
}
