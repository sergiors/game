<?php

declare (strict_types = 1);

namespace Sergiors\Game;

class Area implements AreaInterface
{
    private $position;

    public function getPosition(): PositionInterface
    {
        return $this->position;
    }

    public function setPosition(PositionInterface $position)
    {
        $this->position = $position;
    }
}
