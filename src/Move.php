<?php

declare (strict_types = 1);

namespace Sergiors\Game;

class Move
{
    private $map;

    private $player;

    public function __construct(Map $map, CharacterInterface $player)
    {
        $this->map = $map;
        $this->player = $player;
    }

    public function getArea()
    {
        return $this->player->getArea();
    }

    public function up()
    {
        $area = $this->map->getUpArea($this->getArea());
        $this->player->setArea($area);
    }

    public function down()
    {
        $area = $this->map->getDownArea($this->getArea());
        $this->player->setArea($area);
    }

    public function left()
    {
        $area = $this->map->getLeftArea($this->getArea());
        $this->player->setArea($area);
    }

    public function right()
    {
        $area = $this->map->getRightArea($this->getArea());
        $this->player->setArea($area);
    }
}
