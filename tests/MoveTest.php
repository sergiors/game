<?php

namespace Sergiors\Game\Test;

use Sergiors\Game\Map;
use Sergiors\Game\Player;
use Sergiors\Game\FreeArea;
use Sergiors\Game\BlockArea;
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
            ->addArea($xy00 = new FreeArea(new Position(0, 0)))
            ->addArea($xy01 = new FreeArea(new Position(0, 1)))
            ->addArea($xy02 = new FreeArea(new Position(0, 2)))
            ->addArea($xy03 = new BlockArea(new Position(0, 3)))
            ->addArea($xy04 = new FreeArea(new Position(0, 4)))
            ->addArea($xy10 = new FreeArea(new Position(1, 0)))
            ->addArea($xy11 = new FreeArea(new Position(1, 1)))
            ->addArea($xy12 = new FreeArea(new Position(1, 2)))
            ->addArea($xy13 = new FreeArea(new Position(1, 3)))
            ->addArea($xy14 = new FreeArea(new Position(1, 4)))
            ->addArea($xy20 = new FreeArea(new Position(2, 0)))
            ->addArea($xy21 = new FreeArea(new Position(2, 1)))
            ->addArea($xy22 = new FreeArea(new Position(2, 2)))
            ->addArea($xy23 = new FreeArea(new Position(2, 3)))
            ->addArea($xy24 = new FreeArea(new Position(2, 4)))
        ;

        $player = new Player($xy11);
        $move = new Move($map, $player);

        $this->assertSame($player->getArea(), $xy11);

        $move->up();
        $this->assertSame($player->getArea(), $xy01);

        $move->right();
        $this->assertSame($player->getArea(), $xy02);

        $move->right();
        $this->assertSame($player->getArea(), $xy02);

        $move->down();
        $move->down();
        $move->down();
        $move->down();
        $move->down();

        $this->assertSame($player->getArea(), $xy22);
    }
}
