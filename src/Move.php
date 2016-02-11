<?php

declare(strict_types = 1);

namespace Sergiors\Game;

class Move
{
    private $map;

    private $player;

    private $nextUp;

    public function __construct(Map $map, CharacterInterface $player)
    {
        $this->map = $map;
        $this->player = $player;
    }

    public function up()
    {
        if (!$this->nextUp instanceof AccessibleInterface) {
            return;
        }

        $this->player->setArea($this->nextUp);
        $this->nextUp = $this->map->getUpArea($this->player->getArea());
    }

    public function down()
    {

    }

    public function left()
    {
    }

    public function right()
    {
    }
}
