<?php

declare(strict_types = 1);

namespace Sergiors\Game;

class Move
{
    private $map;
    private $player;

    public function __construct( Map $map, CharacterInterface $player)
    {
        $this->map = $map;
        $this->player = $player;
    }

    public function up()
    {

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
