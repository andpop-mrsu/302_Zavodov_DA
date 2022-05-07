<?php

namespace Zavodov\Task06_2;

class BreakfastDecorator extends Decorator
{
    public function __construct(RoomInterface $room)
    {
        parent::__construct($room);
    }

    public function getPrice(): int
    {
        return parent::getPrice() + 500;
    }

    public function getDescription(): string
    {
        return parent::getDescription() . ", завтрак \"шведский стол\"";
    }
}
