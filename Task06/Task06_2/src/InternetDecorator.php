<?php

namespace Zavodov\Task06_2;

class InternetDecorator extends Decorator
{
    public function __construct(RoomInterface $room)
    {
        parent::__construct($room);
    }

    public function getPrice(): int
    {
        return parent::getPrice() + 100;
    }

    public function getDescription(): string
    {
        return parent::getDescription() . ", выделенный Интернет";
    }
}
