<?php

declare (strict_types = 1);

namespace Sergiors\Game;

class Move
{
    private $map;

    private $character;

    public function __construct(Map $map, CharacterInterface $character)
    {
        $this->map = $map;
        $this->character = $character;
    }

    public function getArea()
    {
        return $this->character->getArea();
    }

    public function up()
    {
        $area = $this->map->getUpArea($this->getArea());
        $this->character->setArea($area);
    }

    public function down()
    {
        $area = $this->map->getDownArea($this->getArea());
        $this->character->setArea($area);
    }

    public function left()
    {
        $area = $this->map->getLeftArea($this->getArea());
        $this->character->setArea($area);
    }

    public function right()
    {
        $area = $this->map->getRightArea($this->getArea());
        $this->character->setArea($area);
    }
}
