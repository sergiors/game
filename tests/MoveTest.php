<?php

namespace Sergiors\Game\Test;

use Sergiors\Game\Map;
use Sergiors\Game\Player;
use Sergiors\Game\FreeArea;
use Sergiors\Game\Position;
use Sergiors\Game\Move;

class MoveTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldMovePlayer()
    {
        $map = new Map();
        $map
            ->addArea(new FreeArea(new Position(1, 1)))
            ->addArea(new FreeArea(new Position(1, 2)))
            ->addArea(new FreeArea(new Position(2, 1)))
            ->addArea(new FreeArea(new Position(2, 2)));

        $player = new Player();

        $move = new Move($map, $player);
    }
}
